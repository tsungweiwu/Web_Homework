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
                                <strong class="card-title mb-3"><?php echo $username_?></strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                		<table align="center">
                                	<tr>
                                		<td>
                                    		<img class="rounded-circle mx-auto d-block" src="images/drivers/<?php echo $image_ ?>" alt="Card image cap" style="height: 200px; width:200px;">
                                    	</td>
                                    	<td>
                                    		<a href="profile_image.php" name="picture" class="transparent"><i class="fa fa-edit"></i> Change Image </a> 

                                    	</td>
                                	</tr>


                                    <tr>
                                    	
                                    		<td>
	                                    	<div style="padding-top: 40px;"><h3 class="text-sm-center mt-2 mb-1"><?php echo $first_name_ . " " . $last_name_; ?> </h3></div>
	                                    	</td>
	                                    	<td>
	                                    	<div style="padding-top: 40px;"><a name="name" class="transparent" href="profile_name.php"><i class="fa fa-edit"></i> Edit </a></div>
                                    		</td>
	                                	
	                                    
                          			</tr>

                                    <tr>
                                        
                                            <td>
                                            <div style="padding-top: 40px;"><h4 class="text-sm-center mt-2 mb-1"><?php echo $day_ ?></h4></div>
                                            </td>
                                            <td>
                                            <div style="padding-top: 40px;"><a name="name" class="transparent" href="profile_day.php"><i class="fa fa-edit"></i> Edit </a></div>
                                            </td>
                                        
                                        
                                    </tr>

                                    <tr>
                                        
                                            <td>
                                            <div style="padding-top: 40px;"><h4 class="text-sm-center mt-2 mb-1"><?php $dob = new DateTime($day_);
                                                                                                                  $age = $dob->diff(new DateTime);
                                                                                                                  echo $age->y; ?></h4></div>
                                            </td>
                                        
                                        
                                    </tr>


                          			<tr>
                          				<td>
                                    		<div style="padding-top: 40px;"><h4 class="text-sm-center mt-2 mb-1"><?php if($role_ == 1){echo "Admin";} elseif($role_ == 0){echo "Driver";} ?></h4></div>
                                    	</td>
                                    </tr>

                                    <tr>
                                    	<td>
                                    		<div style="padding-top: 40px;" class="text-sm-center mt-2 mb-1"><i class="fa fa-envelope"> <?php echo $email_; ?></i></div>
                                    	</td>
                                    	<td>
                                    		<div style="padding-top: 40px;"><a name="email" class="transparent" href="profile_email.php"><i class="fa fa-edit"></i> Edit </a></div>
                                    	</td>
                                    </tr>

                                    <tr>
                                        
                                            <td>
                                            <div style="padding-top: 40px;"><h4 class="text-sm-center mt-2 mb-1"><?php echo $phone_ ?></h4></div>
                                            </td>
                                            <td>
                                            <div style="padding-top: 40px;"><a name="name" class="transparent" href="profile_phone.php"><i class="fa fa-edit"></i> Edit </a></div>
                                            </td>
                                        
                                        
                                    </tr>

                                    <tr>
                                        
                                            <td>
                                            <div style="padding-top: 40px;"><h4 class="text-sm-center mt-2 mb-1"><?php echo $address_ ?></h4></div>
                                            </td>
                                            <td>
                                            <div style="padding-top: 40px;"><a name="name" class="transparent" href="profile_address.php"><i class="fa fa-edit"></i> Edit </a></div>
                                            </td>
                                        
                                        
                                    </tr>


                                    <tr>
                                        <form action="includes/insert.inc.php" method="POST" enctype="multipart/form-data">
                                            <td>
                                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                                            <div style="left:5px;padding-top:40px;" class="col-12 col-lg-12"><select name="district_id" id="district" class="form-control">
                                                                                                                <option value="0">Please select District</option>
                                                                                                                
                                                                                                                <?php 
                                                                                                                $result = mysqli_query($conn, "SELECT * FROM districts");

                                                                                                                while ($row = mysqli_fetch_array($result)) {

                                                                                                                  echo "<option value='" . $row['district_id'] . "'";
                                                                                                                  if($row['district_id'] == $district_id_){echo " selected";}
                                                                                                                  echo ">" . $row['district_name'] . "</option>";
                                                                                                                }
                                                                                                                ?>
                                                                                                                
                                                                                                              </select>
                                        </td>
                                        
                                        <td>
                                            <div style="padding-left: 50px;padding-top: 40px;"><button type="submit" name="change_district" class="btn btn-primary btn-sm">Update</button> <a class="btn btn-danger btn-sm" href="profile.php">Cancel</a></div>

                                        </td>
                                        </form>
                                    </tr>


                                    <tr>

                                    	<td>
                                    		<label style="padding-left: 25px;padding-top: 40px;">Change your Password</label>
                                    	</td>
                                    	<td>
                                    		<div style="padding-left: 25px;padding-top: 40px;"><a href="profile_password.php" class="btn btn-primary btn-sm"> Update </a></div>
                                    	</td>
                                    </tr>

                                </table>
                                </div>
                                <hr>
                                <a href="new_vehicle.php" class="btn btn-primary pull-right"> Add Vehicle </a>
                            </div>
                        </div>
                    </div>

                    <?php
                                    $result = mysqli_query($conn, "select * from vehicles where driver=$id");
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "
                                            <div class='col-md-4'>
                                            <section class='card'>
                                                <div class='twt-feed blue-bg'>
                                                    <div>
                                                        
                                                    </div>
                                                    <div></div>

                                                    <div class='media'>
                                                        <a>
                                                            <img class='align-self-center rounded-circle mr-3' style='width:100px; height:100px;' alt='' src='images/vehicles/". $row['image'] ."'>
                                                        </a>
                                                        <div class='media-body'>
                                                            <h2 class='text-white display-6'>". $row['vehicle_brand'] ."</h2>
                                                            <p class='text-light'>". $row['vehicle_year']."</p>
                                                        </div>
                                                        <button class='btn btn-outline-danger' type='submit' onClick='deleteme(".$row['vehicle_id'].")';'>Delete</button>
                                                    </div>



                                                </div>
                                                <div class='weather-category twt-category'>
                                                    <ul>
                                                        <li class='active'>
                                                            <h5>".$row['vehicle_id']."</h5>
                                                            Vehicle ID
                                                        </li>
                                                        <li>
                                                            <h5>".$row['license_plate']."</h5>
                                                            License Plate
                                                        </li>
                                                        <li>
                                                            <h5>".$row['seats']."</h5>
                                                            Seater
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            </section>
                                        </div>
                                    ";
                                    }

                                    ?>

                                    <script language="javascript">
                                     function deleteme(delid)
                                     {
                                     if(confirm("Do you want Delete!")){
                                     window.location.href='includes/delete.inc.php?car_id=' +delid+'';
                                     return true;
                                     }
                                     } 
                                     </script>
</body>
</html>
