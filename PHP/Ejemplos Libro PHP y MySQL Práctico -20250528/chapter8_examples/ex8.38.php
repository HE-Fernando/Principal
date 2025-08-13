<html><head><title>array_pop()</title></head>
<body bgcolor="cccc99">
<font face="verdana" size="+1">
<?php

  echo "Before pop(): ";
  $names=array("Tom","Dan", "Steve", "Christian", "Jerry");
  foreach($names as $val){
       echo "<em>$val </em>";
  }
  $popped = array_pop($names); // Remove last element
  echo "<br>After pop(): ";
  foreach($names as $val){
      echo "<em>$val </em>";
  }
  echo "<p>$popped was removed from the end of the array.</p>";

?>
</pre>
</body>
</html>
