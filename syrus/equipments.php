<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <link rel="stylesheet" href="stylelayout.css">


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
                <li><a href="index.html">HOME</a></li>
                <li><a href="record.html">RECORDS</a></li>
                <li><a href="#">EQUIPMENTS</a></li>
                <li><a href="#">HOME</a></li>
            </ul>
            
            <!-- <img src="#" alt="LOGO" class="brand-logo center hide-on-med-and-up"> -->


            <ul class="sidenav " id="mobile-nav">
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="record.html">RECORDS</a></li>
                    <li><a href="#">EQUIPMENTS</a></li>
                    <li><a href="#">HOME</a></li>
                </ul>
            </div>
        </div>

    </nav> 
    &nbsp;
      <div class=" container eqlist   light-green z-depth-2">
            <h3 class="title col s12 center">Equipments List</h3> 
        <div class="row  pagelist valign-wrapper">
            <img src="Icons\gggl.png" alt="Globe" class="center responsive-img col s2 offset-s1"/>
            <h4 class="col  s3 center offset-s2 ">Globe </h4>
           
                <a onclick="M.toast({html: 'Item added to cart'})" class="col offset-s2 amber indigo-text btn ">
                    <i class="material-icons">shopping_cart</i>Order
                </a>
        </div>
        <div class="row  pagelist valign-wrapper">
                <img src="Icons\statemap.png" alt="Maps" class="center responsive-img col s2 offset-s1"/>
                <h4 class="col  s3 center offset-s2 ">Maps </h4>
               
                    <a onclick="M.toast({html: 'Item added to cart'})" class="col offset-s2 amber indigo-text btn ">
                        <i class="material-icons">shopping_cart</i>Order
                    </a>
        </div>
            <div class="row  pagelist valign-wrapper">
            <img src="Icons\microscope.png" alt="Microscope" class="center responsive-img col s2 offset-s1"/>
            <h4 class="col  s3 center offset-s2 ">Microscope </h4>
           
                <a onclick="M.toast({html: 'Item added to cart'})" class="col offset-s2 amber indigo-text btn ">
                    <i class="material-icons">shopping_cart</i>Order
                </a>
        </div>

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
   
  <script src="app1.js"></script>
  </body>
</html>