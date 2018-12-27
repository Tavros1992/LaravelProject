<?php 
Session::get('data');
$data=Session::get('data');
 ?>
 <!DOCTYPE html>
<html>
  <head>
  	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- <script type="text/javascript" src="{{URL::asset('resources/assets/js/autocomplate.js')}}"></script> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
		<input hidden type="hidden" name="" id="lat" value="<?php echo $data[0]->latitude;?>">
		<input hidden type="hidden" name="" id="lng" value="<?php echo $data[0]->longitude;?>">
  </body>
      <script>
            function initMap() {
      	var lat =  $("#lat").val();
      	var lng =  $("#lng").val();
      	lat =parseFloat(lat);
      	lng =parseFloat(lng);
        var location = {lat:lat,lng:lng}
        console.log(location)
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center:location,
        });
        var marker = new google.maps.Marker({
          position : location,
          map:map
        });
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAV7H2xvhaVczISksDHpEeTgRUAEyjXFDU&callback=initMap"
    ></script>
</html>