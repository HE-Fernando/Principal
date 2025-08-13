<html><head><title>array push()</title></head>
<body bgcolor="lightblue">
<font face="verdana" size="+1">
<?php

  echo "Before push(): ";
  $names=array("Tom","Dan", "Christian", "Jerry");
  foreach($names as $val){
     echo "<em>$val </em>";
  }
  array_push($names,"Tina", "Donna"); // Add two elements
  echo "<br>After push(): ";
  foreach($names as $val){
    echo "<em>$val </em>";
  }
  echo "<p>Tina and Donna were added to the end of the array.</p>";

?>
</pre>
</body>
</html>
