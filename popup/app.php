<html>
 <head>
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <style>
  #load_posts{
     
    position: fixed;
    bottom: 5;
    left: 5;
  
  }
  </style>
 </head>
 <body>
  
   <div id="load_posts" style='border:1px solid gray;border-radius:<?php echo $_GET['style'];?>;'></div>
  
 
 </body>
</html>
<script>
    
$(document).ready(function(){
    
function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}

var usr = getUrlVars()["u"];
var del = getUrlVars()["delay"];
var styl = getUrlVars()["style"];


var part = "fetch_data.php?u=";
var url=part+usr+"&delay="+del+"&style="+styl;

 setInterval(function(){//setInterval() method execute on every interval until called clearInterval()


	$('#load_posts').load(url);
  
 }, 100);


 setTimeout(fade_out,  (1000 * (getUrlVars()["delay"])));
 
function fade_out() {
  $("#load_posts").fadeOut().empty();
}

 
});

</script>

