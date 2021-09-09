<html>
    <?php
    $lngtitude = isset($_POST['Longitude'])?$_POST['Longitude']:'empty';
    $latitude = isset($_POST['Latitude'])?$_POST['Latitude']:'empty';
    $report = isset ($_POST['Report'])?$_POST['Report']:'empty';
    $sentfrom = isset ($_POST['UserSent'])?$_POST['UserSent']:'empty';
    $description = isset ($_POST['Description'])?$_POST['Description']:'empty';
    $time = isset ($_POST['Time'])?$_POST['Time']:'empty';
    $date = isset ($_POST['Date'])?$_POST['Date']:'empty';
  
    
    $location = $latitiude . ", " . $lngtitude;
    
    
        
    ?>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $con = mysqli_connect("localhost:3306", "jp2_testacct", "s9672252d", "testdatabase");
        date_default_timezone_set("Singapore");   
        //Check Connection
        if(mysqli_connect_errno($con)){
        echo "Failed to connect to MYSQL: " . mysqli_connect_error();
        
        } else {
      $insert = mysqli_query($con, "INSERT INTO `testdatabase`.`account` "
              . "(`Name`, `Time`, `Date`, `Description`, `Latitude`,`Longitude` )"
              . " VALUES ('".$report."','". $time."','". $date."', '".$description."','".$latitude."','".$lngtitude."')");
            
     
            echo mysqli_affected_rows($con);
            echo 'Success!';
            mysqli_close($con);
            header("location:Report4.php");
        }
        
        ?>
    </body>
</html>