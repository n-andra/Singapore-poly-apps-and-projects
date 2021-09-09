<!DOCTYPE html>
<?php
session_start();

$con = mysqli_connect("localhost:3306", "jp2_testacct", "s9672252d", "testdatabase");

$select = mysqli_query($con, "SELECT `Latitude`,`Longitude` FROM `testdatabase`.`Location` ORDER BY `ID` DESC LIMIT 1");

        if(mysqli_connect_errno($con)){
          echo "Failed to connect to MYSQL: " . mysqli_connect_error();
            } else {
            
                while ($row =  mysqli_fetch_array($select)){
                  $lat  = $row['Latitude'];
                  $long = $row['Longitude'];
             }
            mysqli_close($con);
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
            <form action="Report3.php" method="post">
             <table>
                  <input type="text" name="latitude"  id="latitude"    value="<?php echo $lat?>" style="display:none" />
                  <input type="text" name="longitude" id="longitude"   value="<?php echo $long?>" style="display:none" />
                  <tr>
                       <td> Type of Report </td>
                  </tr>
                  
                  <tr>
                      <td> <button name="type" type="submit" value="1"><img class="featureImg" src="buttons/outrage-of-modesty.gif" style="width:35%;height:25%"/></button> </td>
                      <td> <button name="type" type="submit" value="2"><img class="featureImg" src="buttons/fire.gif" style="width:35%;height:25%"/> </button> </td>
                      <td> <button name="type" type="submit" value="3"><img class="featureImg" src="buttons/suspicious-chracter.gif" style="width:35%;height:25%"/> </button> </td>
                  </tr>
                  
                  <tr>
                      <td> <button name="type" type="submit" value="4"><img class="featureImg" src="buttons/domestic-violence.gif" style="width:35%;height:25%"/></button> </td>
                      <td> <button name="type" type="submit" value="5"><img class="featureImg" src="buttons/robbery.gif" style="width:35%;height:25%"/></button> </td>
                      <td> <button name="type" type="submit" value="6"><img class="featureImg" src="buttons/other.gif" style="width:35%;height:25%"/></button> </td>
                  </tr>
                  
              </table>
            </form>
            
             <a>*A 999 call is needed if police assistance is needed</a>
        </div>
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>

