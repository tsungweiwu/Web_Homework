<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<?php 
include_once 'includes/db.inc.php';
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="images/godeh.png">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.php">
                        <img class="align-content" src="images/GoDeh Logo.png" alt="">
                    </a>
                </div><br>
                <div class="login-form">
                        <form action="includes/signup.inc.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">First Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="fname" name="first_name" placeholder="First Name" class="form-control"><small class="form-text text-muted">Please enter driver's first name</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Last Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="lname" name="last_name" placeholder="Last Name" class="form-control"><small class="form-text text-muted">Please enter driver's last name</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="username" name="username" placeholder="Username" class="form-control"><small class="form-text text-muted">Please enter driver's username</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="email" name="email" placeholder="example@gmail.com" class="form-control"><small class="form-text text-muted">Please enter your email</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
                            <div class="col-12 col-md-9"><input type="password" id="username" name="password" placeholder="Password" class="form-control"><small class="form-text text-muted">Please enter driver's password</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Birth Day</label></div>
                            <div class="col-12 col-md-9"><input type="date" id="day" name="date" placeholder="Birth Date" class="form-control"><small class="form-text text-muted">Please enter driver's date of birth</small></div>
                          </div>
                         
                        

                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Gender</label></div>
                            <div class="col col-md-9">
                              <div class="form-check">
                                <div class="radio">
                                  <label for="radio1" class="form-check-label ">
                                    <input type="radio" id="radio1" name="gender" value="Male" class="form-check-input">Male
                                  </label>
                                </div>
                                <div class="radio">
                                  <label for="radio2" class="form-check-label ">
                                    <input type="radio" id="radio2" name="gender" value="Female" class="form-check-input">Female
                                  </label>
                                </div>
                                <div class="radio">
                                  <label for="radio3" class="form-check-label ">
                                    <input type="radio" id="radio3" name="gender" value="Other" class="form-check-input">Other
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Phone Number</label></div>
                            <div class="col-12 col-md-9"><input type="text" name="phone" id="phone-input" placeholder="+501 XXX-XXXX" class="form-control"></textarea></div>
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
                                  echo ">" . $row['district_name'] . "</option>";
                                }
                                ?>
                                
                              </select>
                            </div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Address</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="address" name="address" placeholder="Address" class="form-control"><small class="form-text text-muted">Please enter the address</small></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="image" class="form-control-file"><label for="file-input">Select file</label></div>
                          </div>

                        <button type="submit" name="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="login.php"> Sign in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
