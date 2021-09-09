<!DOCTYPE html>
<html>
<head>
<style type='text/css'>
        select#ReportType option[value="1"] { background-image:url(img/HBT.png);   }
        select#ReportType option[value="2"] { background-image:url(img/OOR.png); }
        select#ReportType option[value="3"] { background-image:url(others.png); }
        select#ReportType option[value="4"] { background-image:url(male.png);   }
        select#ReportType option[value="5"] { background-image:url(female.png); }
        select#ReportType option[value="6"] { background-image:url(others.png); }
</style>
	<title>Justice App</title>
	
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	
	<script src="javascript.js"></script> <!-- This line is to include Dora's code for getting Location -->

	</head>

<body>
	<h1>Justice App</h1>
	
	<p id="userlocation">Click on the retrieve location button to get your current position</p>
	<p id="message"></p>
				
<!--	<div id="latlon">
		Latitude: <input type="text" readonly id="txtlatitude"></br>
		Longitude: <input type="text" readonly id="txtlongtitude"></br>
	</div>-->
	<button type="button" onclick="getLocation()">Retrieve Location</button>
	<form action="handleReport.php" method="post">
               
                Latitude: <input type="text" readonly name="txtlatitude" id="txtlatitude"><br/>
		Longitude: <input type="text" readonly name="txtlongitude" id="txtlongitude"></br/>
                
                <?php
                
                
                
                ?>
                    <label for='ReportType'>Type of Report :</label>
                    <select name="ReportType">
                    <option style ="background-image:url(img/OOR.png);" value="1">Outrage of Modesty </option>
                    <option value="2">Theft of Motor Vehicles</option>
                    <option value="3">HBT (Housebreaking and Theft)</option>
                    <option value="4">Robbery</option>
                    <option value="5">Snatch Theft</option>
                    <option value="6">Others</option>
                    </select><br/>
                <input type="submit" name="submit"/>
	</form>			

	<h3>Google map loads here</h3>
				
	<div id="googleMap" style="width:500px;height:380px;visibility:hidden;display:none;"></div>
	
</body>

</html>