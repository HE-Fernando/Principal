<html><head><title>array_shift()</title></head>
<body bgcolor="lightblue">
<font face="verdana" size="+1">
<?php

  echo "Before the shift: ";
  $names=array("Tom","Dan", "Steve", "Christian", "Jerry");
  foreach($names as $val){
     echo "<em>$val </em>";
  }
  $shifted=array_shift($names); // Remove first element
  echo "<br>After the shift: ";
  foreach($names as $val){
     echo "<em>$val </em>";
  }
  echo "<p>$shifted was removed.</p>";

?>
</pre>
</body>
</html>
