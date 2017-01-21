<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript">

$.get("dpw.json", function(data){dpw=data; populateTypes();});

</script>

<script type="text/javascript">

function populatePosition() {
	navigator.geolocation.getCurrentPosition(function(position){
		document.getElementById('lat').value = position.coords.latitude;
		document.getElementById('long').value = position.coords.longitude;
	});
	
}

function populateTypes() {
	var finalTypes = [];
	for(var categories in dpw.requestCategory) {
		var catArray = dpw.requestCategory[categories];
		for(var i = 0; i < catArray.length; i++) {
			var thisText = categories+": "+catArray[i];
			var opt = document.createElement("option");
			opt.text = thisText;
			opt.value = thisText;
			document.getElementById("category").add(opt);
			//finalTypes.push(categories+": "+catArray[i]);
			
		}
	}
}

function formIsValid() {
	if(document.getElementById("lat").value == "") {
		var al = document.getElementById("formAlert");
		al.innerText = "Location not available! Please ensure location services are enabled for this page";
		al.style.display = "block"
		return false;
	}
	return true;
}

</script>



</head>

<body>

<div class="page-header">
  <h1>New Service Request</h1>
</div>

<form method="POST" action="add.php">

<label for="fname">First Name</label>
<div class="input-group">
	<input name="fname" type="text" />
</div>

<label for="lname">Last Name</label>
<div class="input-group">
	<input name="lname" type="text" />
</div>


<label for="phone">Phone</label>
<div class="input-group">
	<input name="phone" type="text" />
</div>

<label for="email">E-Mail</label>
<div class="input-group">
	<input name="email" type="text" />
</div>

<label for="category">Category</label>
<div class="input-group">
	<select name="category" id="category"></select>
</div>

<div style="display:none">
<label for="lat">Latitude</label>
<div class="input-group">
	<input name="lat" type="text" id="lat" disabled/>
</div>

<label for="long">Longitude</label>
<div class="input-group">
	<input name="long" type="text" id="long" disabled/>
</div>
</div>
<script type="text/javascript">
populatePosition();
</script>

<label for="picture">Picture Upload</label>
<div class="input-group">
	<input name="picture" type="file" accept="image/*" capture="camera">
</div>

<label for="email">Additional Information</label>
<div class="input-group">
	<input name="description" type="text" size="50"/>
</div>

<input type="button" onclick="javascript:if(formIsValid()) document.forms[0].submit();" value="Submit New Request" />

<div style="display: none" class="alert alert-danger" role="alert" id="formAlert"></div>
</form>

</body>
</html>
