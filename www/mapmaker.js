

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
