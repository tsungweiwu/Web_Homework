<?php
session_start();


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
                                
                                <?php
                    
                                if (isset($_GET['id'])) {
                                $uid = $_GET['id'];
                                $result = mysqli_query($conn, "select * from districts u join drivers s on u.district_id = s.district_id where s.driver_id=$uid");
                                while ($row = mysqli_fetch_array($result)) {
                                
                                ?>
                                    <br><br>
                                    <div class="col-md-4">
                                    <aside class="profile-nav alt">
                                        <section class="card">
                                            <div class="card-header user-header alt bg-dark">
                                                <div class="media">
                                                    <a>
                                                        <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/drivers/<?php echo $row['image'] ?>">
                                                    </a>
                                                    <div class="media-body">
                                                        <h2 class="text-light display-6"><?php echo $row['first_name'] . " " . $row['last_name']; ?></h2>
                                                        <p><?php if($row['role'] == 1){echo "Admin";} elseif($row['role'] == 0){echo "Driver";} ?></p>
                                                    </div>
                                                </div>
                                            </div>


                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <a> <i class="fa fa-envelope-o"></i> Email: <?php echo $row['email']; ?></a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a> <i class="fa fa-calendar"></i> Date of Birth: <?php echo $row['day'] ?> </a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a> <i class="fa fa-info-circle"></i> Age: <?php $dob = new DateTime($row['day']);
                                                                                                                  $age = $dob->diff(new DateTime);
                                                                                                                  echo $age->y; ?></a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a> <i class="<?php if($row['gender']=='Male'){echo "fa fa-male";} elseif($row['gender']=='Female'){echo "fa fa-female";} ?>"></i> Gender: <?php echo $row['gender'] ?> </a>
                                                </li>

                                                <li class="list-group-item">
                                                    <a> <i class="fa fa-phone"></i> Phone: <?php echo $row['phone'] ?> </a>
                                                </li>

                                                <li class="list-group-item">
                                                    <a> <i class="fa fa-globe"></i> District: <?php echo $row['district_name'] ?> </a>
                                                </li>

                                                <li class="list-group-item">
                                                    <a> <i class="fa fa-code"></i> District Code: <?php echo $row['district_code'] ?> </a>
                                                </li>

                                                <li class="list-group-item">
                                                    <a> <i class="fa fa-users"></i> District Population: <?php echo $row['district_population'] ?> </a>
                                                </li>

                                                <li class="list-group-item">
                                                    <a> <i class="fa fa-home"></i> Address: <?php echo $row['address'] ?> </a>
                                                </li>

                                            </ul>

                                            </section>
                                        </aside>
                                    </div>

                                    <?php
                                    $result = mysqli_query($conn, "select * from vehicles where driver=$uid");
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "
                                            <div class='col-md-4'>
                                            <section class='card'>
                                                <div class='twt-feed blue-bg'>
                                                    <div>
                                                        <i></i>
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





                                    <?php

                                    }
                                            }
                                    ?>
                                <hr>

                            
                        
</body>
</html>
