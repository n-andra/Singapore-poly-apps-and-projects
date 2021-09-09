<!DOCTYPE html>
<?php
session_start();

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
                
                  
                 <!--<div class="collapse navbar-collapse navHeaderCollapse">
               
                   <ul class ="nav navbar-nav navbar-right">
                   
                       <li class="active"><a href = "#">Home</a></li>
                       <li><a href = "#">Blog</a></li>
                       
                         <li class=dropdown">
                             <a href="#" class = "dropdown-toggle" data-toggle ="dropdown"> Social Media <b class="caret"></b></a>
                           
                            <ul class="dropdown-menu">
                               
                                <li><a href ="#">Facebook</a></li>
                                <li><a href ="#">Twitter</a></li>
                                <li><a href ="#">Instagram</a></li>
                                <li><a href ="#">Facebook</a></li>
                             </ul>
                       
                         </li>    
                       
                        <li><a href = "#">About</a></li>
                        <li><a href = "#">Contact</a></li>
                   
                   </ul>
               
                 </div>-->
                 
           </div> 
        </div>
        
        <div class="container">
            <form action="MapCheck.php" method="post">
        <table>
            
                  <tr>
                       <td> NRIC </td>
                       <td>: <input type="text" name="NRIC" id="NRIC" /></td> <br/>
                  </tr>
                  <tr>
                       <td> Phone No. </td>
                       <td>: <input type="password" name="PN" id="PN"/></td> <br/>   
                  </tr>
                  <tr>
                       <td>&nbsp;</td>
                       <td align="right"><input type="submit" name="submit" value="Login"/></td>    
                  </tr>
            </form>
        </table>
        </div>
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
