<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple markers</title>
	<link rel="stylesheet" href="mapmaker.css" type="text/css">
    <script src="mapmaker.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
    var data = '<?php echo json_encode($data);?>';

    </script>
  </head>
  <body>
	<h1 id="atlanta"> Smart Atlanta </h1>

	<nav class = "navbar navbar-default" role = "navigation">
   <div>
      <ul class = "nav navbar-nav">
		 <li><a href = "/add.php">Report a Problem</a></li>
      </ul>
   </div>

</nav>
<div id= "all">
<ul class="nav nav-pills nav-stacked" id="vertical">
   <li class="small"><a href = "/?category=parkmaintance">Park Maintance</a></li>
   <li class="small"><a href = "/?category=trees">Trees</a></li>
   <li class="small"><a href = "/?category=flooding">Flooding</a></li>
   <li class="small"><a href = "/?category=sewer">Sewer Issues</a></li>
   <li class="small"><a href = "/?category=light">Street Light Repair</a></li>
   <li class="small"><a href = "/?category=water">Water Services</a></li>
   <li class="small"><a href = "/?category=signs">Signs and Signals Issues</a></li>
   <li class="small"><a href = "/?category=streets">Streets and Sidewalks Issues</a></li>	 
</ul>

    <div id="map"></div>

   </div>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKHvGvRRh1wIWJOteAZSlEFlfbEPue6Jc
&callback=initMap">
    </script>
  </body>
</html>
