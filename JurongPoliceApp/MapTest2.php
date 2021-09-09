<section id="wrapper">
    <script>
var geocoder = new google.maps.Geocoder();
var map;
var infowindow = new google.maps.InfoWindow();
var marker;
function initialize() {
  map = new google.maps.Map(document.getElementById('map-canvas'), {
        zoom: 8,
        center: {lat: 40.730885, lng: -73.997383}
      });
}

function codeLatLng() {
  var input = document.getElementById('latlng').value;
  var latlngStr = input.split(',', 2);
  var latlng = new google.maps.LatLng(latlngStr[0], latlngStr[1]);
  geocoder.geocode({'location': latlng}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      if (results[1]) {
        map.setZoom(11);
        marker = new google.maps.Marker({
          position: latlng,
          map: map
        });
        infowindow.setContent(results[1].formatted_address);
        infowindow.open(map, marker);
      } else {
        window.alert('No results found');
      }
    } else {
      window.alert('Geocoder failed due to: ' + status);
    }
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

</script>
</section>