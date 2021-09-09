<!DOCTYPE html>

<html>
    <?php
if(isset($_SERVER['HTTP_REFERER']))
{
$a=$_SERVER['HTTP_REFERER'];
echo "Your previous page URL is ".$a;
}?>
    
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
            <form action="TestPage4.php" method="get">
             <table>
           
                  <tr>
                      <td><img class="featureImg" src="buttons/logo.gif" style="width:40%;height:20%"/></td>
                  </tr>
                  
                  <tr>
                      <td>  <a href="Home.php"><img class="featureImg" src="buttons/view-reports.gif" style="width:50%;height:25%"/></a> </td>
                      <td>  <a href="Home.php"><img class="featureImg" src="buttons/sign-in.gif" style="width:50%;height:25%"/></a> </td>
                      <td>  <a href="Home.php"><img class="featureImg" src="buttons/view-reports.gif" style="width:50%;height:25%"/></a> </td>
                  </tr>
                  
                  <tr>
                      <td>  <a href="MapCheck.php"><img class="featureImg" src="buttons/report.gif" style="width:50%;height:25%"/></a> </td>
                      <td>  <a href="Home.php"><img class="featureImg" src="buttons/maps.gif" style="width:50%;height:25%"/></a> </td>
                      <td>  <a href="Home.php"><img class="featureImg" src="buttons/guide.gif" style="width:50%;height:25%"/></a> </td>
                  </tr>
                  
              </table>
            </form>
            
             <a>*A 999 call is needed if police assistance is needed</a>
        </div>
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
