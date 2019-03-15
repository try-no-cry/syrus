<?php
require_once("includes/dbh.inc.php");
session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body style="background-color:bisque;">
       
    <nav class="orange" style="padding:0px 10px;">
        <div class="nav-wrapper">
          
          <div class="container">  <a href="#" class="brand-logo">LOGO</a>
            <a href="#" class="sidenav-trigger" data-target="mobile-nav"><i class="material-icons" >menu</i></a>
           

            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Feedbacks</a></li>
                <li><a href="#">Top Skills</a></li>
                <li><a href="#">About us</a></li>
                
                <?php
                if(isset($_SESSION['email'])){
                    
                    echo '<li>
                        <form action="includes/logout.php" method="POST">
                        <button type="submit" name="logout" value="logout">Logout</button>
                        </form>
                        </li>';
                    
                    
//                    echo '<img src="Images/default-user-image.png" alt="User" style="height:50px;width:50px; display:inline">';
                    
                    
                
                }
                    ?>
            </ul>
            
<!--            DHEERAJ WALI JS KI LINK-->
           
           <a href="dheeraj.php">Dheeraj Wala page</a>
            
            <!-- <img src="#" alt="LOGO" class="brand-logo center hide-on-med-and-up"> -->


            <ul class="sidenav " id="mobile-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Feedbacks</a></li>
                    <li><a href="#">Top Skills</a></li>
                    <li><a href="#">About us</a></li>
                </ul>
            </div>
        </div>

    </nav> 
    
      <div class="parallax-container ">
          <div class="container body-container light-grey  ">         
          
                  
                </div>
              </div>
<!--
      <div>
        <div class="parallax"><img class="responsive-image imggg" src="images/burnt.jpg" ></div>
      </div>
-->
      
<!--<div class="container ">
        <div class="row">
        <h3 class=" center">Features</h3>
        <div class="col l3 s12">
            <div class="icon-block">
              <h2>  <i class="material-icons col  ">accessibility_new</i></h2>
              <h5>ABCDE</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit id sunt non! Distinctio eveniet sed maxime! Saepe 
-->
<!--
                illo nobis assumenda error molestiae ipsam, vitae maiores tempore atque! Alias, similique assumenda!</p>
            </div>
          </div>
            <div class="col l3 s12">
                <div class="icon-block">
                  <h2>  <i class="material-icons col  ">assignment</i></h2>
                  <h5>ABCDE</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit id sunt non! Distinctio eveniet sed maxime! Saepe 
                    illo nobis assumenda error molestiae ipsam, vitae maiores tempore atque! Alias, similique assumenda!</p>
                </div>
                </div>
            <div class="col l3 s12">
                    <div class="icon-block">
                      <h2>  <i class="material-icons col  ">assessment</i></h2>
                      <h5>ABCDE</h5>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit id sunt non! Distinctio eveniet sed maxime! Saepe 
                        illo nobis assumenda error molestiae ipsam, vitae maiores tempore atque! Alias, similique assumenda!</p>
                    </div>
            </div>
              <div class="col l3 s12">
                        <div class="icon-block">
                          <h2>  <i class="material-icons col  ">event</i></h2>
                          <h5>ABCDE</h5>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit id sunt non! Distinctio eveniet sed maxime! Saepe 
                            illo nobis assumenda error molestiae ipsam, vitae maiores tempore atque! Alias, similique assumenda!</p>
                        </div>       
              </div>
                  
      </div>
    </div>
-->
     
     
   <?php  
$useremail=$_SESSION['email'];
     
$sql="SELECT * FROM login WHERE email=".$useremail.";";





     
     ?>
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
      <div class="parallax-container center valign-wrapper">
        <div class="container body-contanier">
          <div class="center white-text">
            <div class="row">
              <div class="col s12" style="margin:auto" id="hehe"><h2>Changing Lives Nationwide</h2></div></div>
          </div>
        </div>
          <div class="parallax"><img class="responsive-image imggg" src="images/burnt.jpg" ></div>
        </div>
        
      

&nbsp;
    <footer class="page-footer orange">
        <div class="container">
            <div class="row">
                <div class="col s12 m8 l6">
                    <h5 class="white-text">First Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col s12 m4 l6">
                    <h5 class="white-text">Second Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2016 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>

    <!--JavaScript at end of body for optimized loading
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
        });
    </script>-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   
    <script type="text/javascript" src="app.js"> </script>
  </body>
</html>