<?php 
        $page = "Home";
        include 'header.php';
        if (isset($_GET['delid'])){
          $ftID = $_GET['delid'];
          include 'db.php';
          $sql = "DELETE FROM ftTable_tsungwei WHERE ftID='$ftID'";
          mysqli_query($conn, $sql);
          header("location: index.php?delete=success");

        }

        ?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Home</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="index.php">Table</a></li>
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
                            <strong class="card-title">View</strong>
                        </div>
                        <div class="card-body">
                            <a class="btn btn-outline-primary pull-right" href="insert.php">Add</a>

                  <table id="bootstrap-data-table" class="table table-striped table-bordered">

                    <thead>
                      <tr style="text-align: center">
                        <th width="5%">ID</th>
                        <th width="40%">Full Name</th>
                        <th width="40%">Email</th>
                        <th width="15%">Gender</th>
                        <th width="20%">Age</th>
                        <th width="5%"></th>
                        <th width="5%"></th>
                      </tr>
                    </thead>
            
                    <tbody>
                        <?php 
                            $sum = 0;
                            include 'db.php';
                            $result = mysqli_query($conn, "select * from ftTable_tsungwei");
                            while ($row = mysqli_fetch_array($result)) {
                                echo "
                                <tr style='text-align: center'>
                                <td style='vertical-align: middle;'>". $row['ftID'] ."</td>
                                <td style='vertical-align: middle;'>". $row['ftName'] ."</td>
                                <td style='vertical-align: middle;'>". $row['ftEmail'] ."</td>
                                <td style='vertical-align: middle;'>". $row['ftGender'] ."</td>
                                <td style='vertical-align: middle;'>". $row['ftAge'] ."</td>
                                

                                <td style='vertical-align: middle;'><form action='update.php?ftID=". $row['ftID']."' method='POST'><button class='btn btn-outline-primary' type='submit' name='update'>Update</button></form></td>

                                <td style='vertical-align: middle;'><form action='index.php?delid=". $row['ftID']."'' method='POST'><button class='btn btn-outline-danger' type='submit' name='delete'>Delete</button></form></td>
                            </tr>
                            ";

                            $sum += $row['ftAge'];

                        }
                    
                        ?>
                            

                     
                    </tbody>
                  </table>
                  <?php echo "total Age = ". $sum; ?>
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
