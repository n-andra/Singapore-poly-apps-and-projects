<?php
session_start();
$lat = isset ($_POST['txtlatitude'])? $_POST['txtlatitude']: 'null';
$long = isset ($_POST['txtlongitude'])? $_POST['txtlongitude']: 'null';
$reporttype = isset($_POST['ReportType'])? $_POST['ReportType'] : '0';  
$con = mysqli_connect("localhost:3306", "jp2_testacct", "s9672252d", "testdatabase");

$_SESSION['reporttype'] = $reporttype;
$_SESSION['latitude'] = $lat;
$_SESSION['longitude'] = $long;

 if(mysqli_connect_errno($con)){
        echo "Failed to connect to MYSQL: " . mysqli_connect_error();
       
       } else {
      $insert = mysqli_query($con, "INSERT INTO `testdatabase`.`location` "
              . "(`Latitude`, `Longitude`)"
              . " VALUES ('".$lat."','". $long."')");
            echo mysqli_affected_rows($con);
            header("location:Report3.php");
        }

?>