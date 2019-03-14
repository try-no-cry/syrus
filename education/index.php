<?php
   include"includes/dbh.inc.php"; 
 
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

  <body>
       
   
    <nav class="orange" style="padding:0px 10px;">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">LOGO</a>
            <a href="#" class="sidenav-trigger" data-target="mobile-nav"><i class="material-icons" >menu</i></a>
           

            <ul class="right hide-on-med-and-down">
                <li><a href="#">HOME</a></li>
                <li><a href="#">HOME</a></li>
                <li><a href="#">HOME</a></li>
                <li><a href="#">HOME</a></li>
            </ul>
            
            <!-- <img src="#" alt="LOGO" class="brand-logo center hide-on-med-and-up"> -->


            <ul class="sidenav " id="mobile-nav">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">HOME</a></li>
                </ul>
            
        </div>

    </nav> 
<div class="container body-container light-grey">
    
        <!-- <div class="parallax-container">
                <div class="parallax"><img src="images/parallax1.jpg"></div>
              </div>
                   -->
    <!-- Modal Trigger -->
    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal Default</a>
    
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
                    <input type="password" name="pwdConf" name="confirm_password" class="validate">
                    <label for="confirm_password">Confirm Password</label>
            </div>
          
<!--          <div class="modal-footer amber lighten-5">-->
        
        <button type="submit" name="btnSignup" value="submit" class=" modal-action modal-close waves-effect waves-green btn-flat">Submtehjit</button>
<!--      </div>-->
          
        </form>
     
        
         <?php
        //error handler after signup
        
        if(isset($_GET['error'])){
            $ret=$_GET['error'];
            
            if($ret=="name"){
                echo"<p>Error in name input";
            }
        }
        
        ?>
        
        
      </div>
      
    </div>
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
       
   