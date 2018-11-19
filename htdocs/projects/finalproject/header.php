<?php 
include_once 'includes/db.inc.php';
$id=$_SESSION['driver_id'];
$sql = "SELECT * FROM drivers c join districts d on d.district_id=c.district_id WHERE driver_id='$id'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
            $id = $row['driver_id'];
            $image_ = $row['image'];
            $username_ = $row['username'];
            $first_name_ = $row['first_name'];
            $last_name_ = $row['last_name'];
            $role_ = $row['role'];
            $email_ = $row['email'];
            $phone_ = $row['phone'];
            $address_ = $row['address'];
            $day_ = $row['day'];
            $district_ = $row['district_name'];
            $district_id_ = $row['district_id'];

        }
?>

<div id="right-panel" class="right-panel">
<!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/drivers/<?php echo $image_; ?>" alt="User Avatar" style="height: 40px;width:40px;">
                        </a>

                        <div class="user-menu dropdown-menu">

                                <a class="nav-link" href="#"><i class="fa fa- user"></i><?php echo $username_; ?></a>

                                <a class="nav-link" href="profile.php"><i class="fa fa- user"></i>My Profile</a>

                               <?php
                                    if (isset($_SESSION['username'])) {
                                        echo '<form action="includes/logout.inc.php" method="POST">
                                                <button class="button" type="submit" name="submit">Logout</button>
                                                </form>';
                                    }
                                    else {
                                        header("Location: ../index.php");
                                        exit();
                                    }
                                ?>

                            <style>
                            .button {
                                 background:none!important;
                                 border:none;
                                 cursor: pointer;
                                 color: #272c33;
                                  display: block;
                                  font-size: 14px;
                                  line-height: 22px;
                                  padding: 5px 0;
                            }
                            </style>
                                
                        </div>
                    </div>

                    

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->