<?php
  $count=$_COOKIE['visits'];
  if( $count == ""){
        $count = 1;
  }
  else{
          $count++;
   }
  setcookie("visits",$count); // "visits" is the name of the cookie
?>

<html><head><title>Tracking Visitors</title></head>
<body bgcolor="lavender">
<font face="verdana" size="+1">
<p />
<h2>Tracking Visitors with Cookies</h2>
<p /> 
You are visitor number <?php echo $count ?>.</h3><br>
</font>
</body>
</html>

