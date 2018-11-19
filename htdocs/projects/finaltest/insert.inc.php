<?php

	if (isset($_POST['insert'])) {

		include_once 'db.php';

		$ftName = ($_POST['ftName']);
		$ftEmail = ($_POST['ftEmail']);
		$ftGender = ($_POST['ftGender']);
		$ftAge = ($_POST['ftAge']);


		if (empty($ftName) || empty($ftEmail) || empty($ftGender) || empty($ftAge) ) {

			header("Location: insert.php?insert=empty");
			exit();
		}
		else {
			$sql = "INSERT INTO ftTable_tsungwei (ftName, ftEmail, ftGender, ftAge) VALUES ('$ftName', '$ftEmail', '$ftGender', '$ftAge');";
						mysqli_query($conn, $sql);

					    $result = mysqli_query($conn, "SELECT * FROM Person");
						header("Location: index.php?insert=success");

		}

	}
	else{
		header("Location: insert.php");
	}

?>

