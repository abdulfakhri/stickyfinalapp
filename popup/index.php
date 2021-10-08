<html>
 <head>
  <title>Auto Refresh Div Content Using jQuery and AJAX</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <style>
  body
  {
   margin:0;
   padding:0;
   background-color:#f1f1f1;
  }
  .box
  {
   width:500px;
   border:1px solid #ccc;
   background-color:#fff;
   border-radius:5px;
   margin-top:100px;
  }
  #load_posts
  {
   padding:16px;
   background-color:#f1f1f1;
   margin-bottom:30px;
  }
  #load_posts p
  {
   padding:12px;
   border-bottom:1px dotted #ccc;
  }
  </style>
 </head>
 <body>
  <div class="container">

   <br />
   <br />
   <div id="load_posts"></div>
   <!-- Refresh this Div content every second!-->
   <!-- For Refresh Div content every second
     we use setInterval() !-->
     <div id="demo1"></div>
       <div id="demo2"></div>
        <div id="demo3"></div>
  </div>
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

var qu = getUrlVars()["q"];
var del = getUrlVars()["delay"];

setTimeout(fade_out,del);

function fade_out() {
  $("#load_posts").fadeOut().empty();
}


var part = "fetch_data.php?q=";
var url=part+qu+"&delay="+del;
document.getElementById("demo1").innerHTML = qu;
document.getElementById("demo2").innerHTML = del;
document.getElementById("demo3").innerHTML = url;
 setInterval(function(){//setInterval() method execute on every interval until called clearInterval()
  $('#load_posts').load(url);
  //$('#load_posts').load("fetch_data.php?q=8&delay=200").fadeIn("slow");
  //load() method fetch data from fetch.php page
 }, 100);

 

 
});

</script>

