M.AutoInit();
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });
   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, options);
  });
 
  $('body').click(function(event) {
    
    var log = $('#log');
    
    if($(event.target).is('#l1')) {
      
      document.getElementById('header').innerHTML= "<p>Language</p>";
    } 
    
    else if ($(event.target).is('#l2')) {
      document.getElementById('header').innerHTML = "<p>Psychology course</p>";
    } 
    
    else if ($(event.target).is('#l3')) {
      document.getElementById('header').innerHTML = "<p>English Speaking</p>";

    } 
    
    else if ($(event.target).is('#l4')) {
      document.getElementById('header').innerHTML = "<p>Hindi Speaking</p>";

    } 
    else if ($(event.target).is('#l5')) {
      document.getElementById('header').innerHTML = "<p>Marathi Speaking</p>";
    }
});




