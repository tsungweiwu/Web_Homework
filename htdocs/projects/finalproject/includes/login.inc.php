<?php

session_start();

if (isset($_POST['submit'])) {

	include 'db.inc.php';

	$username = ($_POST['username']);
	$password = ($_POST['password']);

	//Error handlers
	//Check if inputs are empty
	if (empty($username) || empty($password)) {
		header("Location: ../login.php?login=empty");
		exit();
	}
	else {
		$sql = "SELECT * FROM drivers WHERE username='$username' OR email='$username'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../login.php?login=usernameerror");
			exit();
		}
		else {
			if ($row = mysqli_fetch_assoc($result)) {
				//De-hashing the password
				$hashedPasswordCheck = password_verify($password, $row['password']);
				if ($hashedPasswordCheck == false) {
					header("Location: ../login.php?login=passworderror");
					exit();
				}
				elseif ($hashedPasswordCheck == true) {
					//Log in the user here
					$_SESSION['driver_id'] =$row['driver_id'];
					$_SESSION['first_name'] =$row['first_name'];
					$_SESSION['last_name'] =$row['last_name'];
					$_SESSION['email'] =$row['email'];
					$_SESSION['day'] =$row['day'];
					$_SESSION['gender'] =$row['gender'];
					$_SESSION['phone'] =$row['phone'];
					$_SESSION['district_id'] =$row['district_id'];
					$_SESSION['address'] =$row['address'];
					$_SESSION['image'] =$row['image'];
					$_SESSION['username'] =$row['username'];
					$_SESSION['role'] =$row['role'];

					header("Location: ../dashboard.php");
					$find_counts = mysqli_query($conn, "SELECT * FROM user_visits");
                    while($row = mysqli_fetch_array($find_counts))
                    {
                        $current_counts = $row['counts'];
                        $new_count = $current_counts + 1;
                        $update_count = mysqli_query($conn,"UPDATE user_visits SET counts = '$new_count'");
                    }
                    

					exit();
				}
			}
		}
	}

}
else {
		header("Location: ../login.php?login=error");
		exit();
	}

