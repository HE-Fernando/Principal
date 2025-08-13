<?php
        $info = array("ellie", "yellow", 22);
	setcookie("usr", serialize($info));
?>
<html><head><title>Multiple Cookie Values</title></head>
<body bgcolor="lavender">
<font face="verdana" size='+1'>
<h2>$_COOKIE[]</h2>
<pre>
<b>
<?php
                    
if(! empty($_COOKIE[usr])){
   $cookie_data= $_COOKIE['usr'];
   $cookie_data=stripslashes($cookie_data);
   $cookie_data=unserialize("$cookie_data");
   
   echo "What's in the cookie array<br>";
   print_r($_COOKIE);
   echo "<pre>Unserialized data<br>";
   print_r( $cookie_data);

 }
?> 
</b>
</pre>
</font>
</body>
</html>
