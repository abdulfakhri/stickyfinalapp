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
  <div class="container box">

   <br />
   <br />
   <div id="load_posts"></div>
   <!-- Refresh this Div content every second!-->
   <!-- For Refresh Div content every second
     we use setInterval() !-->
  </div>
 </body>
</html>
<script>
$(document).ready(function(){

 setInterval(function(){//setInterval() method execute on every interval until called clearInterval()
  $('#load_posts').load("fetch_data.php?q=8").fadeIn("slow");
  //load() method fetch data from fetch.php page
 }, 1000);
 
});
</script>