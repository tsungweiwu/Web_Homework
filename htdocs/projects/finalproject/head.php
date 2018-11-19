<?php
if (!isset($_SESSION['username'])) {
                                        header("Location: ../index.php");
                                        exit();
                                    }
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php if ($_SESSION['role'] == 1){
                    echo "Admin - " . $_SESSION['first_name'];
                 } 
                 else{
                    echo "Driver - " . $_SESSION['first_name'];
                 }
                 ?></title>
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
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

 <script type="text/javascript">
    var watchID;
    var geoLoc;
    var map;
    var marker;
    function showLocation(position) {
      var latitude = position.coords.latitude;
      var longitude = position.coords.longitude;
      lat = latitude;
      lng = longitude;
      output ="Latitude : " + latitude + " Longitude: " + longitude;

      map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: lat, lng: lng},
          zoom: 15
        });

      marker = new google.maps.Marker({
          position: {lat: lat, lng: lng}, 
          map: map,
          title: 'Hello World!'
        });

      image = 'images/taxi.png';

        <?php 
            include 'includes/db.inc.php';
            $result = mysqli_query($conn, "SELECT * FROM location");
            while ($row = mysqli_fetch_array($result))
            {
                $latitude = $row['Latitude'];
                $longitude = $row['Longitude'];

        ?>
            var latitude = <?php echo $latitude;?>;
            var longitude = <?php echo $longitude;?>;

          marker = new google.maps.Marker({
              position: {lat: latitude, lng: longitude},
              map: map,
              title: 'Vehicle',
              icon: image
            });

        <?php } ?>


       
    }

    function errorHandler(err) {
      if(err.code == 1) {
        alert("Error: Access is denied!");
      }else if( err.code == 2) {
        alert("Error: Position is unavailable!");
      }
    }
    function getLocationUpdate(){
       if(navigator.geolocation){
          var options = {enableHighAccuracy:true,maximumAge:30000,timeout:27000};
          geoLoc = navigator.geolocation;
          watchID = geoLoc.watchPosition(showLocation, errorHandler, options);
       }else{
          alert("Sorry, browser does not support geolocation!");
       }
    }

      
  </script>




    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>