<?php 
  include 'header.php'; 
	include 'db.php';
	if(isset ($_GET['ftID'])) {
	  $ftID = $_GET['ftID'];
	  $result = mysqli_query($conn, "SELECT * from ftTable_tsungwei WHERE ftID=$ftID");
	  $row = mysqli_fetch_array($result);
	  $ftName = $row['ftName'];
	  $ftEmail = $row['ftEmail'];
	  $ftGender= $row['ftGender'];
	  $ftAge = $row['ftAge'];

	}
                        
?>

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Update</h1>
                    </div>
                </div>
            </div>
        </div>

<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

 <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <strong>Final Test</strong> Update <a class="btn btn-outline-primary pull-right" href="index.php">Back Home</a>
                      </div>
                      <div class="card-body card-block">

                        <form action="update.inc.php" method="POST" enctype="multipart/form-data" class="form-horizontal">

                          <input type="hidden" name="ftID" value="<?php echo $ftID; ?>">

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Full Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="name" name="ftName" placeholder="Name" class="form-control" value="<?php echo $ftName; ?>"><small class="form-text text-muted">Please enter full name</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="email" name="ftEmail" placeholder="example@gmail.com" class="form-control" value="<?php echo $ftEmail; ?>"><small class="form-text text-muted">Please enter email</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Gender</label></div>
                            <div class="col col-md-9">
                              <div class="form-check">
                                <div class="radio">
                                  <label for="radio1" class="form-check-label ">
                                    <input type="radio" id="radio1" name="ftGender" value="Male" class="form-check-input" <?php if($ftGender == 'Male'){echo "checked";}?> >Male
                                  </label>
                                </div>
                                <div class="radio">
                                  <label for="radio2" class="form-check-label ">
                                    <input type="radio" id="radio2" name="ftGender" value="Female" class="form-check-input" <?php if($ftGender == 'Female'){echo "checked";}?> >Female
                                  </label>
                                </div>
                                <div class="radio">
                                  <label for="radio3" class="form-check-label ">
                                    <input type="radio" id="radio3" name="ftGender" value="Other" class="form-check-input" <?php if($ftGender == 'Other'){echo "checked";}?> >Other
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Age</label></div>
                            <div class="col-12 col-md-9">
                              <select name="ftAge" id="district" class="form-control">
                                <option value="0">Please select Age</option>
                                
                                <?php 
                                while ($age < 100){
                                  $age++;
                                  echo "<option value='" . $age . "'";
                                  if($ftAge == $age){echo " selected";}
                                  echo ">" . $age . "</option>";
                                }
                                ?>
                                
                              </select>
                            </div>
                          </div>
                          
                          
                      <div class="card-footer">

                          <button type="submit" name="update" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                          </button>
        
                        <a href="index.php" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Cancel
                        </a>
                      </div>
                    </form>

                    </div>

                  </body>

                  </html>
