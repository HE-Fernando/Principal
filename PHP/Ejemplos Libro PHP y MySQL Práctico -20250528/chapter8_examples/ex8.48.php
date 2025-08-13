<html>
<head><title>Union</title></head>
<body bgcolor="lightgreen">
<b>
<pre>
<?php

  $colors=array('R'=>'red','G'=>'green','B'=>'blue');
  $shades=array('G'=>'gray','BL'=>'black','W'=>'white');
  /* two keys are the same */
  $combo = $colors + $shades; // Join $shades to $colors
  print_r($combo) . "<p>";
  print_r($shades + $colors); // Now join $colors to $shades

?>
</pre>
</b>
</body>
</html>
