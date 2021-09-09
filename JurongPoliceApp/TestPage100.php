<?php

include 'LatLonConverter.php';
$lat =1.3098438;
$lon =103.77829279999999;

Get_Address_From_Google_Maps($lat, $lon);
echo $address['formatted_address'];
?>

