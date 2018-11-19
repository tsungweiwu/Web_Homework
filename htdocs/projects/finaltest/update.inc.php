<?php 

	if(isset($_POST['update'])){

	include_once 'db.php';

	$ftID = ($_POST['ftID']);
	$ftName = ($_POST['ftName']);
	$ftEmail = ($_POST['ftEmail']);
	$ftGender = ($_POST['ftGender']);
	$ftAge = ($_POST['ftAge']);

	$sql = "UPDATE ftTable_tsungwei
			SET ftName='$ftName', ftEmail='$ftEmail', ftGender='$ftGender', ftAge='$ftAge' WHERE ftID='$ftID';";

			mysqli_query($conn, $sql);

		header("Location: index.php?update=success");

	}