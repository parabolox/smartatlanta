<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple markers</title>
	<link rel="stylesheet" href="mapmaker.css" type="text/css">
    <script>


    	function initMap() {
    		var myLatLng = {lat:33.776531, lng:-84.413242};
    		var geocoder;
    		var map;
    		var contentString;
    		var arry=[];
    		map = new google.maps.Map(document.getElementById('map'), {
              zoom: 11,
              center: myLatLng
            });
    		data = JSON.parse(data);
    		for(var i=0; i<data.length; i++) {
    			address(map, data[i]);
    		}

    	}
    	function address(map, result) {



    				var currentString = '<img src="'+result.doc.image+'"  alt="Mountain View" style="width:300px;">' + '<p>' + result.doc.category + '</p>' ;

    				var infowindow = new google.maps.InfoWindow({
    					//has to be the current String
    				  content: currentString
    				});
    				var location = new Object();
    				location.lat = parseFloat(result.doc.lat);
    				location.lng= parseFloat(result.doc.lng);

    				var marker = new google.maps.Marker({
    				  map: map,
    				  position: location,
    				  icon: 'http://maps.google.com/mapfiles/ms/icons/red-dot.png'
    				});

    				//onclick set content
    				var markerClick = function() {
    					infowindow.setContent(currentString);
    					infowindow.open(map, marker);
    				};
    				marker.addListener('click', markerClick);



          }
</script>
    <style>
    #map {
            height: 82%;
    		width: 85%;


          }
    html, body {
    		height: 100%;
            margin: 0;
            padding: 0;
    		overflow: hidden;
    }
    #atlanta{
    	margin-left: 43%;
    }
    .navbar-default {
    	width: 9%;
    	margin-left: 45%;

    }
    .small{

    }
    #all {
    	width: 100%;
    	height: 100%;
    }
    ul {

    	float: left;
    }
    </style>
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
