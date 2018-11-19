<?php

if (isset($_POST['submit'])) {

	include_once 'db.inc.php';

	$first_name = ($_POST['first_name']);
	$last_name = ($_POST['last_name']);
	$email = ($_POST['email']);
	$username = ($_POST['username']);
	$password = ($_POST['password']);

	//Error Handlers
	//Check for empty fields
	if (empty($first_name) || empty($last_name) || empty($email) || empty($username) || empty($password)) {

		header("Location: ../signup.php?signup=empty");
		exit();
	}
	else {
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first_name) || !preg_match("/^[a-zA-Z]*$/", $last_name)) {
			header("Location: ../signup.php?signup=invalid");
			exit();
		}
		else {
			//Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../signup.php?signup=invalidemail");
				exit();
			}
			else {
				$sql = "SELECT * FROM users WHERE username='$username'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if($resultCheck > 0) {
					header("Location: ../signup.php?signup=usertaken");
					exit();
				}
				else{
					//Hashing the password
					$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
					//Insert the user into the database
					$sql = "INSERT INTO users (first_name, last_name, email, username, password) VALUES ('$first_name', '$last_name', '$email', '$username', '$hashedPassword');";
					mysqli_query($conn, $sql);
					header("Location: ../index.php?signup=success");
				}
			}
		}
	}

}
else{
	header("Location: ../signup.php");
	exit();
}