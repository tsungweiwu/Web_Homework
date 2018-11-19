<?php
session_start();
 $id=$_SESSION['driver_id'];
 if (!isset($_SESSION['username'])) {
                                        header("Location: ../index.php");
                                        exit();
                                    }
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang=""> <!--<![endif]-->
<style>
.transparent {     
    background-color: Transparent;
    border: none;
    cursor:pointer;
    padding-left: 50px;
}
</style>

<?php 
include 'head.php';
include 'includes/db.inc.php';


 ?>

<body>
        <?php
        include 'menu.php';
        include 'header.php';
        include 'footer.php';


        ?>

        <div class="col-lg-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">User: <?php echo $username_?></strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                		<table align="center">


                                        <form action="includes/vehicle.inc.php" method="POST" enctype="multipart/form-data">
                                        
                                        <td>
                                            <div style="padding-top: 20px;">
                                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                <label>Please enter Vehicle Brand</label><input type="text" name="vehicle_brand" placeholder="Brand" class="form-control"><br>
                                                <label>Please enter Vehicle Year</label><input type="text" name="vehicle_year" placeholder="Year" class="form-control"><br>
                                                <label>Please enter License Plate Number</label><input type="text" name="license_plate" placeholder="Plate" class="form-control"><br>
                                                <select name="seats" id="seats" class="form-control">
                                                    <option value="0">Please select Seats</option>
                                                    
                                                    <?php 
                                                    $seat = 0;
                                                    while ($seat<10) {
                                                        $seat++;
                                                        echo "<option value='" . $seat . "'>" . $seat . "</option>";
                                                    }
                                                    ?>
                                                    
                                                  </select><br>
                                                <input type="file" id="file-input" name="image" class="form-control-file"><br>
                                                <button type="submit" name="vehicle" class="btn btn-primary btn-sm"> Add </button> <a class="btn btn-danger btn-sm" href="profile.php">Cancel</a>
                                            </div>

                                        </td>

                                        </form>

                                    

                                </table>
                                </div>
                                <hr>
                                

                            </div>
                        </div>
                    </div>

</body>
</html>
