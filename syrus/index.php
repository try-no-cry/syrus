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
                <li><a href="#">Home</a></li>
                <li><a href="record.php">Records</a></li>
                <li><a href="equipments.php">Equipments</a></li>
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
            <!-- <img src="#" alt="LOGO" class="brand-logo center hide-on-med-and-up"> -->


            <ul class="sidenav " id="mobile-nav">
                     <li><a href="#">Home</a></li>
                <li><a href="record.php">Records</a></li>
                <li><a href="equipments.php">Equipments</a></li>
                <li><a href="#">About us</a></li>
                </ul>
            </div>
        </div>

    </nav> 
    
      <div class="parallax-container ">
          <div class="container body-container light-grey  ">         
              <!-- Modal Trigger -->
              <div class="row">
                  <div class="card yellow lighten-3 col l5 offset-l7 z-depth-5 pulse s10 offset-s1">
                      <div class="card-content ">
                          <h4 class="center">Login</h4>
                          
                          
                          
                          <p><form action="includes/login.inc.php" method="POST">
                          
                          <div class="input-field col s12">
                            <input type="email" id="email" class="validate" name="email">
                            <label for="email" data-error="wrong" data-success="right">Email</label>
                          </div>
      
                          <div class="input-field col s12 ">
                                  <input type="password" id="password" name="pwd" class="validate">
                                  <label for="password">Password</label>
                          </div>
                          
                            <button type="submit" name="login" value="login" class="waves-effect waves-light btn modal-trigger col offset-s4 yellow darken-4" >Login</button>&nbsp;
                          
                        </form>
                        
                        <?php 
                          if(isset($_GET['login'])){

                              if($_GET['login']=="success"){
                                  echo "<br>"."<p>LOGIN SUCCESSFUL!</p>";
                              }
                              
                              
                          }
                          
                          if(isset($_GET['loginerror'])){
                              if($_GET['loginerror']=="wrong"){
                                  echo "<br>"."<p>Wrong credentials!</p>";
                              }
                          }
                          ?>
                        </p>
                        
                        
                      
                      </div>
                      <div class="card-action ">
                          <div class="row">
                          <h6  class="col s9">Haven't registered?</h6>
                              <a class="waves-effect waves-light yellow darken-4 btn modal-trigger col s3" href="#modal1">SignUp</a>
                          </div>
                      </div>
                  </div>
                  &nbsp;
      
                
              
              
              </div>
              
              
              <!-- Modal Structure -->
              <div id="modal1" class="modal amber lighten-5">
                <div class="modal-content">
                  <h4>Sign Up</h4>
                    
                  <p><form action="includes/signup.inc.php" method="POST">
                    <div class="input-field col s12 l6">
                      <input type="text" id="name" name="name" class="validate">
                      <label for="name">Name</label>
                    </div>
                    <div class="input-field col s12 l6">
                          <input type="text" id="school_name" name="school_name" class="validate">
                          <label for="school_name">School Name</label>
                        </div>
                        <div class="input-field col s12 l6">
                              <input type="text" id="district" name="district" class="validate">
                              <label for="district">District</label>
                            </div>
                        <div class="input-field col s12 l6">
                              <input type="text" id="qualifications" name="qualif" class="validate">
                              <label for="qualifications">Qualifications</label>
                      </div>
                      <div class="input-field col s12">
                              <input type="email" id="email" name="email" class="validate">
                              <label for="email" data-error="wrong" data-success="right">Email</label>
                            </div>
                      <div class="input-field col s12 l6">
                              <input type="password" id="password" name="pwd" class="validate">
                              <label for="password">Password</label>
                      </div>
                      <div class="input-field col s12 l6">
                              <input type="password" id="confirm_password" name="pwdConf" class="validate">
                              <label for="confirm_password">Confirm Password</label>
                      </div>
                      
                      <button type="submit" name="signup" value="signup" class=" modal-action modal-close waves-effect waves-green btn-flat center">Submit</button>
                      <?php
                      if(isset($_GET['error'])){
                              if($_GET['error']=="duplicateEmail"){
                                  echo "<br>"."<p>This email is already registered!</p>";
                              }
                          }
                    ?>
                  </form></p>
                </div>
                <div class="modal-footer amber lighten-5">
                  
                  
                </div>
              </div>
      </div>
        <div class="parallax"><img class="responsive-image imggg" src="images/burnt.jpg" ></div>
      </div>
      <div class="container ">
        <div class="row">
        <h3 class=" center">Features</h3>
        <div class="col l3 s12">
            <div class="icon-block">
              <h2>  <i class="material-icons col  ">accessibility_new</i></h2>
              <h5>ABCDE</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit id sunt non! Distinctio eveniet sed maxime! Saepe 
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
      <div class="parallax-container center valign-wrapper">
        <div class="container body-contanier">
          <div class="center white-text">
            <div class="row">
              <div class="col s12" style="margin:auto" id="hehe"><h2>Changing Lives Nationwide</h2></div></div>
          </div>
        </div>
          <div class="parallax"><img class="responsive-image imggg" src="images/burn2.jpg" ></div>
        </div>
        
      

&nbsp;
    <footer class="page-footer orange">
        <div class="container">
            <div class="row">
                <div class="col s12 ">
                    <h5 class="white-text">"Education is the most powerful weapon which you can use to change the world"</h5>
                    <p class="grey-text text-lighten-4"></p>
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
   
    <script type="text/javascript" src="app1.js"> </script>
  </body>
</html>