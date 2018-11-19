 <?php
		if (isset($_GET['del_id'])) {
      $id = $_GET['del_id'];
      include_once 'db.inc.php';
      $sql = "DELETE FROM drivers WHERE driver_id = '$id';";
      mysqli_query($conn, $sql);
      $query = "DELETE FROM vehicles WHERE driver = '$id';";
      mysqli_query($conn, $query);
      header("Location: ../drivers.php?delete=success");
  	}
?>
<!-- ALTER TABLE vehicles ADD CONSTRAINT FK_driver FOREIGN KEY (driver) REFERENCES drivers(driver_id) ON DELETE CASCADE -->

 <?php

 	if (isset($_GET['car_id'])) {
      $id = $_GET['car_id'];
      include_once 'db.inc.php';
      $sql = "DELETE FROM vehicles WHERE vehicle_id='$id'";
      mysqli_query($conn, $sql);
      header("Location: ../profile.php?delete=success");
  }
?>

