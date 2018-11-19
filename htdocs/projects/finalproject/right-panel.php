<?php include 'includes/db.inc.php'; ?>
<!-- Right Panel -->

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
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <?php 
            if($_SERVER['REQUEST_URI'] == '/WDE3-Webapp/dashboard.php?login=success'){
              echo "<div class='col-sm-12'>
              <div class='alert  alert-success alert-dismissible fade show' role='alert'>
                <span class='badge badge-pill badge-success'>Welcome</span> You have logged into Godeh Dashboard
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                  </button>
              </div>
            </div>";
          }
            ?>


           <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        
                        <h4 class="mb-0">
                            <span class="count"><?php  
                                                        $result = mysqli_query($conn, "SELECT COUNT(driver_id) as 'total' FROM drivers");
                                                        $row = mysqli_fetch_array($result); 
                                                        echo $row['total'];
                                                        $driver = $row['total'];
                                                        
                                                        ?>
                                                            
                                                        </span>
                        </h4>
                        <p class="text-light">Drivers Active</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div>

                    </div>

                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        

                        <h4 class="mb-0">
                            <span class="count"><?php  
                                                        $result = mysqli_query($conn, "SELECT COUNT(vehicle_id) as 'total_veh' FROM vehicles");
                                                        $row = mysqli_fetch_array($result); 
                                                        echo $row['total_veh'];
                                                        $vehicle = $row['total_veh'];
                                                        
                                                        ?></span>
                        </h4>
                        <p class="text-light">Vehicles Registered</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart2"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <!-- /# column -->
<style>
      #map {
        height: 500px;
      }
</style>
    
    

                        <div class="col-lg-6" style="float: right">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Nearby Vehicles</h4>
                                </div>
                                <div class="card-body"><body onload="getLocationUpdate();">
                                        <div id="map"></div>
                                </body>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>

                    

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2jlT6C_to6X1mMvR9yRWeRvpIgTXgddM&callback=initMap"
    async defer></script>




                        


<div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        

                        <h4 class="mb-0">
                            <span class="count"><?php  
                                                        $result = mysqli_query($conn, "SELECT * FROM user_visits");
                                                        $row = mysqli_fetch_array($result); 
                                                        echo $row['counts'];
                                                        $visits = $row['counts'];
                                                        
                                                        ?></span>
                        </h4>
                        <p class="text-light">Site Visits</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart3"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->


            
<div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        

                        <h4 class="mb-0">
                            <span class="count"><?php  
                                                        $result = mysqli_query($conn, "SELECT COUNT(district_id) as 'total_dis' FROM districts");
                                                        $row = mysqli_fetch_array($result); 
                                                        echo $row['total_dis'];
                                                        $districts_count = $row['total_dis'];
                                                        
                                                        ?></span>
                        </h4>
                        <p class="text-light">Districts Available</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart4"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-lg-3 col-md-6">
                <div class="social-box facebook">
                    <i class="fa fa-facebook"></i>
                    <ul>
                        <li>
                            <sctrong><span class="count">1</span> k</strong>
                            <span>friends</span>
                        </li>
                        <li>
                            <sctrong><span class="count">200</span></strong>
                            <span>feeds</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->


            <div class="col-lg-3 col-md-6">
                <div class="social-box twitter">
                    <i class="fa fa-twitter"></i>
                    <ul>
                        <li>
                            <sctrong><span class="count">2.4</span> k</strong>
                            <span>friends</span>
                        </li>
                        <li>
                            <sctrong><span class="count">500</span></strong>
                            <span>tweets</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->


                    


            <div class="col-lg-3 col-md-6">
                <div class="social-box linkedin">
                    <i class="fa fa-linkedin"></i>
                    <ul>
                        <li>
                            <sctrong><span class="count">25</span> +</strong>
                            <span>contacts</span>
                        </li>
                        <li>
                            <sctrong><span class="count">100</span></strong>
                            <span>feeds</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->


            <div class="col-lg-3 col-md-6">
                <div class="social-box google-plus">
                    <i class="fa fa-google-plus"></i>
                    <ul>
                        <li>
                            <sctrong><span class="count">1.5</span> k</strong>
                            <span>followers</span>
                        </li>
                        <li>
                            <sctrong><span class="count">10</span></strong>
                            <span>circles</span>
                        </li>
                    </ul>
                </div>
                <!--/social-box-->
            </div><!--/.col-->


<!-- Styles -->

                                    <style>
#chartdiv {
  width: 100%;
  height: 500px;
}

.amcharts-export-menu-top-right {
  top: 10px;
}
</style>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<!-- Chart code -->
<script>
    var driver = <?php echo $driver; ?>;
    var vehicle = <?php echo $vehicle; ?>;
    var visits = <?php echo $visits; ?>;
    var district = <?php echo $districts_count; ?>;
var chart = AmCharts.makeChart("chartdiv", {
  "type": "serial",
  "theme": "light",
  "marginRight": 70,
  "dataProvider": [{
    "country": "Drivers",
    "visits": driver,
    "color": "#FF0F00"
  }, {
    "country": "Vehicles",
    "visits": vehicle,
    "color": "#FF6600"
  }, {
    "country": "Log Ins",
    "visits": visits,
    "color": "#FF9E01"
  }, {
    "country": "Districts",
    "visits": district,
    "color": "#FCD202"
  }],
  "valueAxes": [{
    "axisAlpha": 0,
    "position": "left",
    "title": "Statistics"
  }],
  "startDuration": 1,
  "graphs": [{
    "balloonText": "<b>[[category]]: [[value]]</b>",
    "fillColorsField": "color",
    "fillAlphas": 0.9,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits"
  }],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "labelRotation": 45
  },
  "export": {
    "enabled": true
  }

});
</script>

<!-- HTML -->
                        <div class="col-lg-6" style="float: right">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Stats</h4>
                                </div>
                                <div class="card-body">
                                     <div id="chartdiv"></div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>

           <div class="col-xl-3 col-lg-6">
                <section class="card">
                    <div class="twt-feed blue-bg">
                        <div class="corner-ribon black-ribon">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <div class="fa fa-twitter wtt-mark"></div>

                        <div class="media">
                            <a href="#">
                                <?php
                                $result = mysqli_query($conn, "SELECT * FROM drivers WHERE role = 1;");
                                while($row = mysqli_fetch_array($result)){

                                ?>
                                <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/drivers/<?php echo $row['image']; ?>">
                            </a>
                            <div class="media-body">
                                <h2 class="text-white display-6"><?php echo $row['first_name']. " " .$row['last_name']; ?></h2>
                                <p class="text-light">Driver of the Month</p>
                            </div>
                        </div>
                    </div>
                    <div class="weather-category twt-category">
                        <ul>
                            <li class="active">
                                <h5>240</h5>
                                Lifts
                            </li>
                            <li>
                                <h5>1540</h5>
                                Miles Travelled
                            </li>
                            <li>
                                <h5>2044</h5>
                                Followers
                            </li>
                        </ul>
                    </div>
                    <div class="twt-write col-sm-12">
                        <a>Contact me at : <?php echo $row['email']; ?></a>
                    </div>
                    <footer class="twt-footer">
                        <a href="#"><i class="fa fa-camera"></i></a>
                        <a href="#"><i class="fa fa-map-marker"></i></a>
                        <?php echo $row['address']; ?>
                        
                    </footer>
                </section>
            </div>

            <?php
                }
            ?>


            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total Profit</div>
                                <div class="stat-digit">500,432</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">New Customer</div>
                                <div class="stat-digit">1024</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Active Projects</div>
                                <div class="stat-digit">40</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
