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

			header("Location: ../insert.php?insert=empty");
			exit();
		}
		else {
			$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
			$sql = "INSERT INTO drivers (first_name, last_name, email, day, gender, phone, district_id, address, image, username, password, role) VALUES ('$first_name', '$last_name', '$email', '$date', '$gender', '$phone', '$district', '$address', '$image', '$username', '$hashedPassword', '$role');";
						mysqli_query($conn, $sql);

						if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
					      $msg = "Image uploaded successfully";
					    }else{
					      $msg = "Failed to upload image";
					    }
					    $result = mysqli_query($conn, "SELECT * FROM drivers");
						header("Location: ../drivers.php?insert=success");

		}

	}
	else{
		header("Location: ../insert.php");
	}

?>

<?php

	  if (isset($_POST['update'])) {

	  	include_once 'db.inc.php';

	  	$id = ($_POST['id']);
	    $first_name = ($_POST['first_name']);
		$last_name = ($_POST['last_name']);
		$email = ($_POST['email']);
		$date = ($_POST['date']);
		$gender = ($_POST['gender']);
		$phone = ($_POST['phone']);
		$district = ($_POST['district']);
		$address = ($_POST['address']);

	    

	    $sql = "UPDATE drivers
	    		SET first_name='$first_name', last_name='$last_name', email='$email', day='$date', gender='$gender', phone='$phone', district_id='$district', address='$address' WHERE driver_id='$id';";

	    		mysqli_query($conn, $sql);
	    		

	    header("Location: ../drivers.php?update=success");
	  }

?>

<?php

	  if (isset($_POST['update_image'])) {

	  	include_once 'db.inc.php';

	  	$id = ($_POST['id']);
	  	$image = $_FILES['image']['name'];

	    // image file directory
	    $target = "../images/drivers/".basename($image);

	    $sql = "UPDATE drivers
	    		SET image='$image' 
	    		WHERE driver_id=$id;";

	    		mysqli_query($conn, $sql);
	    		
	    		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
					      $msg = "Image uploaded successfully";
					    }else{
					      $msg = "Failed to upload image";
					    }

	    header("Location: ../drivers.php?image=success");
	  }


?>

<?php

	  if (isset($_POST['update_image2'])) {

	  	include_once 'db.inc.php';

	  	$id = ($_POST['id']);
	  	$image = $_FILES['image']['name'];

	    // image file directory
	    $target = "../images/drivers/".basename($image);

	    $sql = "UPDATE drivers
	    		SET image='$image' 
	    		WHERE driver_id=$id;";

	    		mysqli_query($conn, $sql);
	    		
	    		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
					      $msg = "Image uploaded successfully";
					    }else{
					      $msg = "Failed to upload image";
					    }

	    header("Location: ../profile.php?image=success");
	  }


?>

<?php

	  if (isset($_POST['driver_name'])) {

	  	include_once 'db.inc.php';

	  	$id = ($_POST['id']);
	    $first_name = ($_POST['first_name']);
		$last_name = ($_POST['last_name']);


	    $sql = "UPDATE drivers
	    		SET first_name='$first_name', last_name='$last_name'
	    		WHERE driver_id=$id;";

	    		mysqli_query($conn, $sql);
	    		

	    header("Location: ../profile.php?name=success");
	  }

?>

<?php

	  if (isset($_POST['update_email'])) {

	  	include_once 'db.inc.php';

	  	$id = ($_POST['id']);
	    $email = ($_POST['email']);


	    $sql = "UPDATE drivers
	    		SET email='$email'
	    		WHERE driver_id=$id;";

	    		mysqli_query($conn, $sql);
	    		

	    header("Location: ../profile.php?email=success");
	  }

?>

<?php

	  if (isset($_POST['change_password'])) {

	  	include_once 'db.inc.php';

	  	$id = ($_POST['id']);
	    $old_password = ($_POST['old_password']);
	    $new_password = ($_POST['new_password']);
	    $confirm_password = ($_POST['confirm_password']);

	    $sql = "SELECT * FROM drivers WHERE driver_id='$id'";
		$result = mysqli_query($conn, $sql);

		if ($row = mysqli_fetch_assoc($result)) {
				//De-hashing the password
				$hashedPasswordCheck = password_verify($old_password, $row['password']);

				if ($hashedPasswordCheck == false) {
					header("Location: ../profile_password.php?change=oldpassworderror");
					exit();
				}
				elseif ($hashedPasswordCheck == true) {
					if($new_password == $confirm_password){

						$hashedPassword = password_hash($new_password, PASSWORD_DEFAULT);
						$sql = "UPDATE drivers
			    		SET password='$hashedPassword'
			    		WHERE driver_id=$id;";

	    				mysqli_query($conn, $sql);
	    				header("Location: ../profile.php?password=success");

					}
					else{
						header("Location: ../profile_password.php?password=nomatch");
						exit();
					}
				}
		}
	}

?>

<?php

	  if (isset($_POST['change_dob'])) {

	  	include_once 'db.inc.php';

	  	$id = ($_POST['id']);
	    $day = ($_POST['day']);

	    $sql = "UPDATE drivers
	    		SET day='$day'
	    		WHERE driver_id=$id;";

	    		mysqli_query($conn, $sql);
	    		

	    header("Location: ../profile.php?dob=success");
	  }

?>

<?php

	  if (isset($_POST['change_phone'])) {

	  	include_once 'db.inc.php';

	  	$id = ($_POST['id']);
	    $phone = ($_POST['phone']);

	    $sql = "UPDATE drivers
	    		SET phone='$phone'
	    		WHERE driver_id=$id;";

	    		mysqli_query($conn, $sql);
	    		

	    header("Location: ../profile.php?phone=success");
	  }

?>

<?php

	  if (isset($_POST['change_district'])) {

	  	include_once 'db.inc.php';

	  	$id = ($_POST['id']);
	    $district_id = ($_POST['district_id']);

	    $sql = "UPDATE drivers
	    		SET district_id='$district_id'
	    		WHERE driver_id=$id;";

	    		mysqli_query($conn, $sql);
	    		

	    header("Location: ../profile.php?district=success");
	  }

?>

<?php

	  if (isset($_POST['change_address'])) {

	  	include_once 'db.inc.php';

	  	$id = ($_POST['id']);
	    $address = ($_POST['address']);

	    $sql = "UPDATE drivers
	    		SET address='$address'
	    		WHERE driver_id=$id;";

	    		mysqli_query($conn, $sql);
	    		

	    header("Location: ../profile.php?address=success");
	  }

?>

