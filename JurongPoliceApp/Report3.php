<?php
session_start();
date_default_timezone_set("Asia/Singapore");
$reporttype = $_SESSION['reporttype'];
$lat = $_SESSION['latitude'];
$long = $_SESSION['longitude'];
include 'LatLonConverter.php';
switch ($reporttype){
    case "1":
        $report = "Outrage Of Modesty";
        break;
    case "2":
        $report = "Theft of Motor Vehicles";
        break;
    case "3":
        $report = "HBT (Housebreakting and Theft)";
        break;
    case "4":
        $report = "Robbery";
        break;
    case "5":
        $report = "Snatch Theft";
        break;
    case "6":
        $report = "Others";
        break;
    
}
   

?>
<html>
    <head>
        <title>Bootstrap</title>
        <meta name= "viewport" content="width =device-width, initial-scale= 1.0" >
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <div class ="navbar navbar-inverse navbar-static-top">
           <div class ="container">
                
               <a href= "#" class="navbar-brand"> Blank </a>
                
               <button class="navbar-toggle" data-toggle="collapse" data-target =".navHeaderCollapse">
                   <span class ="icon-bar"></span>
                   <span class ="icon-bar"></span>
                   <span class ="icon-bar"></span>
               </button>
                
           </div> 
        </div>
        
        <div class="container">
            <form action="sendToDatabase.php" method="post">
        <table>
                  <tr>
                  <td> Type of Report </td>
                  <td>: <input type="text" readonly name="Report" id="Report" value="<?php echo $report ?>" /> </td><br/>
                  </tr>
                  <tr>
                      <td> Time </td>
                      <td>: <input type="text" name="Time" readonly id="Time" value="<?php echo date("h:i") ?>"/></td> <br/>
                  </tr>
                  <tr>
                      <td> Date </td>
                      <td>:<input type="text" name="Date" readonly id="Latitude" value="<?php echo  date("Y/m/d")  ?>"/></td> <br/> 
                  </tr>
                  <tr>
                      <td> Sent From </td>
                      <td>: <input type="text" name="UserSent" id="UserSent"/></td> <br/>
                  </tr>
                  <tr>
                      <td> Latitude </td>
                      <td>: <input type="text" name="Latitude" readonly id="Latitude" value="<?php echo $lat ?>"/></td><br/>
                  </tr>
                  <tr>
                      <td> Longitude </td>
                      <td>: <input type="text" name="Longitude" readonly id="Longitude" value="<?php echo $long ?>"/></td><br/>
                  </tr>
                  <tr>
                      <td> Address </td>
                      <td>: <input type="text" name="Address" id="Address" value="<?php Get_Address_From_Google_Maps($lat, $long) ?>"/></td> <br/>
                  </tr>
                  <tr>
                      <td> Description </td>
                      <td>: <input type="text" name="Description" id="Description"/></td> <br/>
                  </tr>
<!--                   <tr>
                       <td> <a href="Report4.php"><img class="featureImg" src="buttons/send.gif" style="width:35%;height:25%"/></a></td>
                       <td> <a href="Report2.php"><img class="featureImg" src="buttons/back.gif" style="width:35%;height:25%"/></a></td>
                  </tr>-->
                  <input type="submit" name="submit" value="Send"/>
                 
                  
        </table>
            </form>
             <a>*A 999 call is needed if police assistance is needed</a>
        </div>
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>



