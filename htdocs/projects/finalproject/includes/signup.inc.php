<?php
if (isset($_POST['submit'])) {

		include_once 'db.inc.php';

	 	$msg = "";

		$first_name = ($_POST['first_name']);
		$last_name = ($_POST['last_name']);
		$email = ($_POST['email']);
		$date = ($_POST['date']);
		$gender = ($_POST['gender']);
		$phone = ($_POST['phone']);
		$district = ($_POST['district']);
		$address = ($_POST['address']);
		$username = ($_POST['username']);
		$password = ($_POST['password']);
		$role = 0;

		// Get image name
	    $image = $_FILES['image']['name'];

	    // image file directory
	    $target = "../images/drivers/".basename($image);

		//Error Handlers
		//Check for empty fields
		if (empty($first_name) || empty($last_name) || empty($email) || empty($date) || empty($gender) || empty($phone) || empty($district) || empty($address) || empty($image) || empty($username) || empty($password) ) {

			header("Location: ../signup.php?insert=empty");
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
				$sql = "SELECT * FROM drivers WHERE username='$username'";
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

					$sql = "INSERT INTO drivers (first_name, last_name, email, day, gender, phone, district_id, address, image, username, password, role) VALUES ('$first_name', '$last_name', '$email', '$date', '$gender', '$phone', '$district', '$address', '$image', '$username', '$hashedPassword', '$role');";
						mysqli_query($conn, $sql);

						if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
					      $msg = "Image uploaded successfully";
					    }else{
					      $msg = "Failed to upload image";
					    }
					    $result = mysqli_query($conn, "SELECT * FROM drivers");
						header("Location: ../login.php?insert=success");

				}
			}
		}
	}

}
else{
	header("Location: ../signup.php");
	exit();
}