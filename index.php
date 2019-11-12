

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="initial-scale=1.0, width=device-width" />
	<link rel="stylesheet" media="all" href="index.css">
	<title>Mercury Courier - The Fastline Is The Right Line</title>
	<style>
		#map {
			height: 760px;
			width: 850px;
		}

	</style>

</head>
<body>

<div class="side-bar">
	<img src="photo_2019-10-30_23-31-42.jpg" alt="Logo" width="150" height="150">
	<a href="trips.html">Trips</a>	
	<a href="#help">Help</a>
	<a href="#settings">Settings</a>
	<a href="#about">About</a>
	<form action="includes/logout.inc.php" method="post">
	<button class="logout" type="submit" name="logout">Logout</button>
</form>
</div>

<div id="map"></div>

<button id="getLocation">Current Location</button>

<script>
	function initMap(){
		var location = {lat: 5.604, lng: 0.187};
		var map = new google.maps.Map(document.getElementById("map"), {
			zoom: 10,
			center: location
		});
		var marker = new google.maps.Marker({
			position: location,
			map: map
		});
	}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap"></script>

<script>
	$('#getLocation').click(function(){
		if(navigator.geol)



	}
</script>

</body>
</html>