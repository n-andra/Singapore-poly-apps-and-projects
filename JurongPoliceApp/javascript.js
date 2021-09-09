
/*************************************************************************************/
/** getLocation() **/
/* This is the function which will be called when user clicks "SEND LOCATION" button */
/*************************************************************************************/
w
} //end getLocation


function successCallback(position) {

	x = document.getElementById("userlocation");
	
	 	
	lat = position.coords.latitude;
	lon = position.coords.longitude;
		
	$("#txtlatitude").val(lat);
	$("#txtlongitude").val(lon);
	
	
	handleSaveLocation();
	initializeMap();
	
	x.innerHTML = "Location retrieved!";
	
} //end function successCallback

function errorCallback(positionError)
{
	x = document.getElementById("userlocation");
	x.innerHTML = "Error getting geolocation: " + positionError.message;
	
	$("#txtlatitude").val(""); 
	$("#txtlongitude").val("");
} //end errorCallback

function handleSaveLocation(){
	y = document.getElementById("message");
	y.innerHTML = "Click the Submit button to continue the report";
} //end function


function initializeMap() {
  var lat = $("#txtlatitude").val();
  var lon = $("#txtlongitude").val();
  var myLatlng = new google.maps.LatLng(lat,lon);
 
  var mapProp = { center: myLatlng, 
                  zoom:15,
                  mapTypeId:google.maps.MapTypeId.ROADMAP};
              
  var markerProp = { position: myLatlng,title:"Justice App"};
  var map= new google.maps.Map(document.getElementById("googleMap"),mapProp);
  var marker = new google.maps.Marker(markerProp);

  document.getElementById("googleMap").style.visibility = "visible";
  document.getElementById("googleMap").style.display = "block";
  marker.setMap(map);
}