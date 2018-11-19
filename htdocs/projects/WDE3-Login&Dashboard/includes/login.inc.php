<?php

session_start();

if (isset($_POST['submit'])) {

	include 'db.inc.php';

	$username = ($_POST['username']);
	$password = ($_POST['password']);

	//Error handlers
	//Check if inputs are empty
	if (empty($username) || empty($password)) {
		header("Location: ../index.php?login=empty");
		exit();
	}
	else {
		$sql = "SELECT * FROM users WHERE username='$username' OR email='$username'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../index.php?login=usernameerror");
			exit();
		}
		else {
			if ($row = mysqli_fetch_assoc($result)) {
				//De-hashing the password
				$hashedPasswordCheck = password_verify($password, $row['password']);
				if ($hashedPasswordCheck == false) {
					header("Location: ../index.php?login=passworderror");
					exit();
				}
				elseif ($hashedPasswordCheck == true) {
					//Log in the user here
					$_SESSION['id'] =$row['id'];
					$_SESSION['first_name'] =$row['first_name'];
					$_SESSION['last_name'] =$row['last_name'];
					$_SESSION['email'] =$row['email'];
					$_SESSION['username'] =$row['username'];
					header("Location: ../dashboard.php?login=success");
					exit();
				}
			}
		}
	}

}
else {
		header("Location: ../index.php?login=error");
		exit();
	}

