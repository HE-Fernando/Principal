<?php
  $date_str="l dS \of F Y h:i:s A";
  $last_visit="Your last visit was on ".  date("$date_str");
  $expire=60*60*24*30 + time();//one month
  setcookie("message","$last_visit", $expire);
?>
<html><head><title>Products</title>
</head>
<body bgcolor="lavender">
<font face="verdana" size='+1'>
<h2>Products Page</h2>
<?php
        if(! empty($_COOKIE[message])){
	   $when="$_COOKIE[message]";
	   echo $when,".<br>";
        }

?>
</font>
</body>
</html>
