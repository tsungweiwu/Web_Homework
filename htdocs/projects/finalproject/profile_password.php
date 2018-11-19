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
                                <strong class="card-title mb-3">Change Password</strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                		<table align="center">

                                    <tr>
                                        <form action="includes/insert.inc.php" method="POST" enctype="multipart/form-data">
                                    	<td>
                                            <div style="padding-top: 20px;">
                                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                        		<label>Please enter your old password</label><input type="password" name="old_password" placeholder="Old Password" class="form-control"><br>
                                                <label>Please enter your new password</label><input type="password" name="new_password" placeholder="New Password" class="form-control"><br>
                                                <label>Enter new password again to confirm</label><input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control">
                                            </div>
                                    	</td>
                                    	<td>
                                    		<div style="padding-left: 25px;padding-top: 40px;"><button type="submit" name="change_password" class="btn btn-primary btn-sm"> Update </button> <a class="btn btn-danger btn-sm" href="profile.php">Cancel</a></div>
                                    	</td>
                                        </form>
                                    </tr>

                                </table>
                                </div>
                                <br>
                                <hr>

                            </div>
                        </div>
                    </div>
</body>
</html>
