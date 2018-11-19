<!doctype html>
<html>
<?php 
  session_start();
  include 'head.php';
  include 'includes/db.inc.php';

$first_name = "";
  $last_name = "";
  $email = "";
  $day = "";
  $gender = "";
  $phone = "";
  $district_id = "";
  $address = "";
  $image = "";
  $id = 0;
  $edit_state = false;
  

  if ($_SESSION['role'] == 0){
                    $message = "You are in Guest mode you cannot access this page!!";
                    echo "<script type='text/javascript'>alert('$message');
                    window.location.href='dashboard.php';
                    </script>";
                 } 


  if (isset($_GET['id'])) {
    $uid = $_GET['id'];
    $edit_state = true;
    $result = mysqli_query($conn, "SELECT * FROM drivers WHERE driver_id=$uid");

      $n = mysqli_fetch_array($result);
      $first_name = $n['first_name'];
      $last_name = $n['last_name'];
      $email = $n['email'];
      $day = $n['day'];
      $gender = $n['gender'];
      $phone = $n['phone'];
      $district_id = $n['district_id'];
      $address = $n['address'];
      $image = $n['image'];
      $username = $n['username'];
    
  }


  ?>

  <body>

<?php 
  include 'menu.php';
  include 'header.php';

  if($_SERVER['REQUEST_URI'] == '/WDE3-Webapp/insert.php?insert=success'){
      echo "<div class='col-sm-12'>
      <div class='alert  alert-success alert-dismissible fade show' role='alert'>
        <span class='badge badge-pill badge-success'>Success</span> You successfully submitted the information.
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
          </button>
      </div>
    </div>";
  }

  else if($_SERVER['REQUEST_URI'] == '/WDE3-Webapp/insert.php?insert=empty'){
    echo "<div class='alert alert-danger' role='alert'>
                                            Error! Fields are left empty! Please fill them!
                                        </div>
                                        ";
  }
  
  ?>



                  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <strong>GoDeh</strong> Insert
                      </div>
                      <div class="card-body card-block">

                        <form action="includes/insert.inc.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                          <input type="hidden" name="id" value="<?php echo $uid; ?>">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">First Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="fname" name="first_name" placeholder="First Name" class="form-control" value="<?php echo $first_name ?>"><small class="form-text text-muted">Please enter driver's first name</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Last Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="lname" name="last_name" placeholder="Last Name" class="form-control" value="<?php echo $last_name ?>"><small class="form-text text-muted">Please enter driver's last name</small></div>
                          </div>

                          <?php if($edit_state == false): ?>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="username" name="username" placeholder="Username" class="form-control"><small class="form-text text-muted">Please enter driver's username</small></div>
                          </div>
                          <?php endif ?>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="email" name="email" placeholder="example@gmail.com" class="form-control" value="<?php echo $email ?>"><small class="help-block form-text">Please enter your email</small></div>
                          </div>

                          <?php if($edit_state == false): ?>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
                            <div class="col-12 col-md-9"><input type="password" id="username" name="password" placeholder="Password" class="form-control"><small class="form-text text-muted">Please enter driver's password</small></div>
                          </div>
                          <?php endif ?>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Birth Day</label></div>
                            <div class="col-12 col-md-9"><input type="date" id="day" name="date" placeholder="Birth Date" class="form-control" value="<?php echo $day ?>"><small class="form-text text-muted">Please enter driver's date of birth</small></div>
                          </div>
                         
                        

                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Gender</label></div>
                            <div class="col col-md-9">
                              <div class="form-check">
                                <div class="radio">
                                  <label for="radio1" class="form-check-label ">
                                    <input type="radio" id="radio1" name="gender" value="Male" class="form-check-input" <?php if($gender == 'Male'){echo "checked";}?> >Male
                                  </label>
                                </div>
                                <div class="radio">
                                  <label for="radio2" class="form-check-label ">
                                    <input type="radio" id="radio2" name="gender" value="Female" class="form-check-input" <?php if($gender == 'Female'){echo "checked";}?> >Female
                                  </label>
                                </div>
                                <div class="radio">
                                  <label for="radio3" class="form-check-label ">
                                    <input type="radio" id="radio3" name="gender" value="Other" class="form-check-input" <?php if($gender == 'Other'){echo "checked";}?> >Other
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Phone Number</label></div>
                            <div class="col-12 col-md-9"><input type="text" name="phone" id="phone-input" placeholder="+501 XXX-XXXX" class="form-control" value="<?php echo $phone ?>"></textarea></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">District</label></div>
                            <div class="col-12 col-md-9">
                              <select name="district" id="district" class="form-control">
                                <option value="0">Please select District</option>
                                
                                <?php 
                                $result = mysqli_query($conn, "SELECT * FROM districts");

                                while ($row = mysqli_fetch_array($result)) {

                                  echo "<option value='" . $row['district_id'] . "'";
                                  if($row['district_id'] == $district_id){echo " selected";}
                                  echo ">" . $row['district_name'] . "</option>";
                                }
                                ?>
                                
                              </select>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Address</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="address" name="address" placeholder="Address" class="form-control" value="<?php echo $address; ?>"><small class="form-text text-muted">Please enter the address</small></div>
                          </div>


                          <?php if($edit_state == false): ?>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="image" class="form-control-file"><label for="file-input">Select file</label></div>
                          </div>
                          <?php else: ?>
                            <div class="row form-group">
                              <div class="col col-md-3"><label for="file-input" class=" form-control-label">To change the image click this!</label></div>
                            <div class="col-12 col-md-9"><button type="button" class="btn btn-primary btn-lg" onClick="redirect(<?php echo $id ?>);">Change Image</button><small class="form-text text-muted">The image is separate from the other info</small></div>
                          </div>
                          <?php endif ?>

                          <script language="javascript">
                           function redirect(upid)
                           {
                           window.location.href='update_image.php?update_id=' +upid+'';
                           } 
                           </script>
                          
                      <div class="card-footer">

                        <?php if($edit_state == false): ?>
                          <button type="submit" name="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                          </button>
                        <?php else: ?>
                          <button type="submit" name="update" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Update
                          </button>
                      <?php endif ?>
        

                        

                        <a href="drivers.php" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Cancel
                        </a>
                      </div>
                    </form>

                    </div>

                  </body>

                  <?php include 'footer.php'; ?>

                  </html>