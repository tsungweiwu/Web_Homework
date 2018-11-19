<!doctype html>
<html>

<style>

	table {
	 margin: auto;
	  border-collapse: collapse;
	  overflow-x: auto;
	  display: block;
	  width: fit-content;
	  max-width: 100%;
	  box-shadow: 0 0 1px 1px rgba(0, 0, 0, .1);
	}
</style>

<?php 
$condition=false;
  session_start();
  include 'head.php';
  include 'includes/db.inc.php';

  ?>

  <body>

<?php 
  include 'menu.php';
  include 'header.php';

  if($_SERVER['REQUEST_URI'] == '/WDE3-Webapp/display.php?image=success'){
      echo "<div class='col-sm-12'>
      <div class='alert  alert-success alert-dismissible fade show' role='alert'>
        <span class='badge badge-pill badge-success'>Success</span> You successfully CHANGED your picture.
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
          </button>
      </div>
    </div>";
  }

  if($_SERVER['REQUEST_URI'] == '/WDE3-Webapp/display.php?update=success'){
      echo "<div class='col-sm-12'>
      <div class='alert  alert-success alert-dismissible fade show' role='alert'>
        <span class='badge badge-pill badge-success'>Success</span> You successfully UPDATED your information.
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
          </button>
      </div>
    </div>";
  }

  if($_SERVER['REQUEST_URI'] == '/WDE3-Webapp/display.php?delete=success'){
      echo "<div class='col-sm-12'>
      <div class='alert  alert-success alert-dismissible fade show' role='alert'>
        <span class='badge badge-pill badge-success'>Success</span> You successfully DELETED your information.
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
          </button>
      </div>
    </div>";
  }

  if($_SERVER['REQUEST_URI'] == '/WDE3-Webapp/display.php?insert=success'){
      echo "<div class='col-sm-12'>
      <div class='alert  alert-success alert-dismissible fade show' role='alert'>
        <span class='badge badge-pill badge-success'>Success</span> You successfully INSERTED your information.
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
          </button>
      </div>
    </div>";
  }


  ?>

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

  <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">

                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Birth Day</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Phone Number</th>
                        <th>District Name</th>
                        <th>District Code</th>
                        <th>District Population</th>
                        <th>Address</th>
                        <th>License Plate No.</th>
                        <th>Picture</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
         	
                    <tbody>
                    <?php
                    $result = mysqli_query($conn, "select * from districts u join drivers s on u.district_id = s.district_id");
                    while ($row = mysqli_fetch_array($result)) {
                    	echo "
                    		<tr>
                    			<td style='vertical-align: middle;'>".$row['driver_id']."</td>
                    			<td style='vertical-align: middle;'>".$row['first_name']."</td>
                    			<td style='vertical-align: middle;'>".$row['last_name']."</td>
                    			<td style='vertical-align: middle;'>".$row['email']."</td>
                    			<td style='vertical-align: middle;'>".$row['day']."</td>
                    			<td style='vertical-align: middle;'>".$row['age']."</td>
                    			<td style='vertical-align: middle;'>".$row['gender']."</td>
                    			<td style='vertical-align: middle;'>".$row['phone']."</td>
                    			<td style='vertical-align: middle;'>".$row['district_name']."</td>
                    			<td style='vertical-align: middle;'>".$row['district_code']."</td>
                    			<td style='vertical-align: middle;'>".$row['district_population']."</td>
                    			<td style='vertical-align: middle;'>".$row['address']."</td>
                    			<td style='vertical-align: middle;'>".$row['plate']."</td>
                    			<td style='vertical-align: middle;'><image class='image img-fluid img-thumbnail img-responsive' src='images/drivers/".$row['image']."'</td>
                    			";

                    			if ($_SESSION['role'] == 1){
	                    			echo "
	                    			<td style='vertical-align: middle;'>"."<form action='insert.php?edit=".$row['driver_id']."' method='POST' enctype='multipart/form-data'><button class='btn btn-outline-info' type='submit' name='update'>Update</button></form>"."</td>
	                    			<td style='vertical-align: middle;'>"."<button class='btn btn-outline-danger' type='submit' onClick='deleteme(".$row['driver_id'].")';'>Delete</button>"."</td>
	                    			</tr>
	                    			";}
                    			else{
                    				echo "
                    				<td style='vertical-align: middle;'>"."<form action='insert.php?edit=".$row['driver_id']."' method='POST' enctype='multipart/form-data'><button class='btn btn-outline-info' type='submit' name='update' disabled>Update</button></form>"."</td>
	                    			<td style='vertical-align: middle;'>"."<button class='btn btn-outline-danger' type='submit' onClick='deleteme(".$row['driver_id'].")';' disabled>Delete</button>"."</td>
	                    			</tr>
	                    			";
                    			}
                    }
                    ?>

                    <script language="javascript">
					 function deleteme(delid)
					 {
					 if(confirm("Do you want Delete!")){
					 window.location.href='includes/delete.inc.php?del_id=' +delid+'';
					 return true;
					 }
					 } 
					 </script>

                     
                    </tbody>
                  </table>
              </form>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>

  </body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>
                  </html>