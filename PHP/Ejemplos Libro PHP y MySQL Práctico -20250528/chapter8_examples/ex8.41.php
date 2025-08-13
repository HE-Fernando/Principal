<html><head><title>array_unshift()</title></head>
<body bgcolor="yellow">
<font face="verdana" size="+1">
<?php

  echo "Before unshift(): ";
  $names=array("Tom", "Dan", "Steve", "Christian", "Jerry");
  foreach($names as $val){
     echo "<em>$val </em>";
  }
  // Add new element to the beginning
  array_unshift($names, "Willie", "Liz");
  echo "<br />After unshift(): ";
  foreach($names as $val){
     echo "<em>$val </em>";
  }
  echo "<p>Willie and Liz were added to the beginning of the array.</p>";

?>
</pre>
</body>
</html>
