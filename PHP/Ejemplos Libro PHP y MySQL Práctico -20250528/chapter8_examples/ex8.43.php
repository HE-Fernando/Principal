<html><head><title>array_slice()</title></head>
<body bgcolor="cccc99">
<font face="verdana">
<pre>
<b>
<?php

  $names=array("Tom", "Dan", "Steve", "Christian", "Jerry");
  echo "Original array before slice(): <br />";
  print_r($names);

  $good_guys=array_slice($names, 0, 3);
  echo "<br>New array from array_slice(0,3):<br /> ";
  print_r($good_guys);
 
  $chosen_ones=array_slice($names, -2);
  echo "New array from array_slice(-2):<br />";
  print_r($chosen_ones);
  echo "Original array after the slice(): <br />";
  print_r($names);

?>
</pre>
<b>
</body>
</html>
