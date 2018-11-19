<!doctype html>
<html>
<?php 
  session_start();
  include 'head.php';
  include 'includes/db.inc.php';
  $id = $_GET['id'];

  if ($_SESSION['role'] == 0){
                    $message = "You are in Guest mode you cannot access this page!!";
                    echo "<script type='text/javascript'>alert('$message');
                    window.location.href='dashboard.php';
                    </script>";
                 } 



  ?>

  <body>

  <?php 
  include 'menu.php';
  include 'header.php';
  
  ?>

  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <strong>GoDeh</strong> Insert
                      </div>
                      <div class="card-body card-block">

                        <form action="includes/insert.inc.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                          <input type="hidden" name="id" value="<?php echo $id; ?>">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="image" class="form-control-file"><label for="file-input">Select file</label></div>
                          </div>
                          <div class="card-footer">

                          	<button type="submit" name="update_image" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Update
                          </button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </body>
  </html>