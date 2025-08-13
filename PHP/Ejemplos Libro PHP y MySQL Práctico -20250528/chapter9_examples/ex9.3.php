<html><head><title>Passing Arguments</title></head>
<body bgcolor = "#ffffcc">
<font face="verdana" size="+1">
<?php

  extract($_REQUEST);
  volume($s1, $s2); // Need 3 arguments, only have 2
  function volume($side1,$side2,$side3){
     print "The volume of the room is: " . $side1 * $side2 * $side3." cubic ft.<br>";
   }
   :wq

?>
</body>
</html>
