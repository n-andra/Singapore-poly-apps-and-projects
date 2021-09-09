<html>
<head>
	<title>Justice App</title>
	
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	
	<script src="javascript.js"></script> <!-- This line is to include Dora's code for getting Location -->

	</head>

<body>
	<h1>Justice App</h1>
	
	<p id="userlocation">User Location Retrieval Status will be recorded here</p>
	<p id="message">User Notification Messages will be recorded here</p>
				
<!--	<div id="latlon">
		Latitude: <input type="text" readonly id="txtlatitude"></br>
		Longitude: <input type="text" readonly id="txtlongitude"></br>
	</div>-->
				
	<form action="sendToDatabase.php" method="post">
            <div id="latlon">
                Latitude: <input type="text" readonly name="txtlatitude" id="txtlatitude"></br>
		Longitude: <input type="text" readonly name="txtlongitude" id="txtlongtitude"></br>
            </div>    
		<button type="button" onclick="getLocation()">Retrieve Location</button>
                <input type="submit"/>
	</form>			

	<h3>Google map loads here</h3>
				
	<div id="googleMap" style="width:500px;height:380px;visibility:hidden;display:none;"></div>
	
</body>

</html>