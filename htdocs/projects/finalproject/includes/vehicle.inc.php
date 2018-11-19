
<?php

	if (isset($_POST['vehicle'])) {

		include_once 'db.inc.php';

	 	$msg = "";
	 	$id = ($_POST['id']);
		$vehicle_brand = ($_POST['vehicle_brand']);
		$vehicle_year = ($_POST['vehicle_year']);
		$license_plate = ($_POST['license_plate']);
		$seats = ($_POST['seats']);

		// Get image name
	    $image = $_FILES['image']['name'];

	    // image file directory
	    $target = "../images/vehicles/".basename($image);

		//Error Handlers
		//Check for empty fields
		if (empty($vehicle_brand) || empty($vehicle_year) || empty($license_plate) || empty($seats) || empty($image) || empty($id) ) {

			header("Location: ../new_vehicle.php?vehicle=empty");
			exit();
		}
		else {
			$sql = "INSERT INTO vehicles (vehicle_brand, vehicle_year, license_plate, seats, image, driver) VALUES ('$vehicle_brand', '$vehicle_year', '$license_plate', '$seats', '$image', '$id');";
						mysqli_query($conn, $sql);

						if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
					      $msg = "Image uploaded successfully";
					    }else{
					      $msg = "Failed to upload image";
					    }
						header("Location: ../profile.php?vehicle=success");

		}

	}
	else{
		header("Location: ../new_vehicle.php");
	}

?>