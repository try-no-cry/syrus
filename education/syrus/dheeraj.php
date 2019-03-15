
<!DOCTYPE html>
<html>
    <head>
        <head>
        
            <title>The Materialize Collapsible Example</title>
            <meta name = "viewport" content = "width = device-width, initial-scale = 1">      
            <script type = "text/javascript"
               src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
               <script type = "text/javascript"
               src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
            <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
            </script>
           
         </head>
         
         <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <script src="app1.js"></script>
    </head>
    <body>
       
      <h1>XYZ WEBSITE</h1>
      <h4>Simple Accordion</h4>
      <ul class = "collapsible" data-collapsible = "accordion">
         <li>
            <div class = "collapsible-header">
               <i class = "material-icons">place</i>District 1</div>      <!--filter_drama for cloud-->
            <div class = "collapsible-body">
              <ul class="collapsible " data-collapsible="accordion">
                <li>
                  <div class = "collapsible-header">  
                    <i class = "material-icons">filter_drama</i>Personality Development Course</div>
                   <div class = "collapsible-body">
                     <p>
                      <ol>
                        <li><b><a id="l1" class="modal-trigger" href="#modal1">Language</a></b> </li></td>
                        <li><b><a id="l2" class="modal-trigger" href="#modal1">Psychology course</a></b></li>
                        <li><b><a id="l3" class="modal-trigger" href="#modal1">English Speaking</a></b></li>
                        <li><b><a id="l4" class="modal-trigger" href="#modal1">Hindi Speaking</a></b></li>
                        <li><b><a id="l5" class="modal-trigger" href="#modal1">Marathi Speaking</a></b></li>
                      </ol>
                     </p>
                   </div>
                </li>

                <li>
                    <div class = "collapsible-header">  
                      <i class = "material-icons">filter_drama</i>Knowledge Course</div>
                     <div class = "collapsible-body">
                       <p>
                         <ol>
                           <li>Geometry</li>
                           <li>Linear Algebra</li>
                           <li>History</li>
                           <li>Civics</li>
                           <li>Geography</li>
                         </ol>
                       </p>
                     </div>
                </li>

              </ul>
            </div>
         </li>
         
         <li>
            <div class = "collapsible-header">
               <i class = "material-icons">place</i>District 2</div>
            <div class = "collapsible-body"><p>This is second section.</p></div>
         </li>
         
         <li>
            <div class = "collapsible-header">
               <i class = "material-icons">place</i>District 3</div>
            <div class = "collapsible-body"><p>This is third section.</p></div>
         </li>
      </ul>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content" >
      <h4 id="header"></h4>
      <p id="body"></p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
  <script type = "text/javascript"
  src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>   
<script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
</script>
<script type="text/javascript" src="app1.js"></script>
<!--Modal Structure ends here-->


    </body>
</html>