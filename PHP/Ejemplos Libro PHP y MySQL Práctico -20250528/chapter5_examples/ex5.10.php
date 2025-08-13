<?php
  extract($_REQUEST); // Get the form input
 // if( $age > 12 and $age < 20 and $age != "" )
 if( $age > 12 && $age < 20 && $age != "" ){
   print "Hey $name, teenagers rock, dude!<br>";
 }
?>
<img src="teenager.jpg" border="1">
</body>
</html>
