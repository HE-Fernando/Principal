<head><title>array_unique()</title></head>
<body bgcolor="cccc99">
<font face="verdana" size="+1">
<?php

  echo "Before: ";
  $numbers=array(1, 3, 5, 7, 7, 7, 9, 9, 8);
  foreach($numbers as $val){
     echo "<em>$val </em>";
  }
  echo "<br>After: ";
  $numbers=array_unique($numbers); // Remove duplicates
  echo '$numbers=<b>array_unique($numbers)i</b><br />';
  foreach($numbers as $val){
     echo "<em>$val </em>";
  }

?>
</pre>
</body>
</html>
