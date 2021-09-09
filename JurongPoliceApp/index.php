<!DOCTYPE html>
<html>
<head>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var myCenter = new google.maps.LatLng( 1.3097, 103.7796);
  var mapProp = {
    center:myCenter,
    zoom:9,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
  var marker=new google.maps.Marker({
  position:myCenter,
  
  });
  marker.setMap(map);
  
  var infowindow = new google.maps.InfoWindow({
  content:"Singapore Polytechnic"
  });
  
  google.maps.event.addListener(marker, 'click', function() {
  infowindow.open(map,marker);
  });
  
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<div id="googleMap" style="width:500px;height:380px;"></div>
</body>

Is this your location?
<button>Yes</button>
<button>No</button>
</html>