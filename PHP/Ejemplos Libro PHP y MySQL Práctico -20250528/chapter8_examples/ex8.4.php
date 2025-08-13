<html>
<head><title>The array_fill() Function</title></head>
<b>
The arrays are displayed as: index value => element value<br>
<pre>
<body bgcolor="lightgreen">
<?php

  $numbers=array_fill(0,10, 0);
  print_r($numbers);
  $methods=array_fill(1,3, "To be defined");
  print_r( $methods);

?>
</pre>
</body>
</html>
