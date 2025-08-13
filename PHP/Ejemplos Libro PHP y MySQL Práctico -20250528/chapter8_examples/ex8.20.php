<html><head><title>The array_keys() Function</title>
</head>
<body bgcolor="silver">
<b>
<pre>
<?php
  $colors=array("red", "green", "blue", "yellow");
  print"The original array:<br />";
  $keys=array_keys($colors);
  print_r($colors);
  print"The keys:<br />";
  print_r($keys);
  echo "Key for \"blue\"<br />";
  $keys=array_keys($colors,"blue");
  print_r($keys);

?>
<hr>
<?php

  $poem=array("Title"=>"The Raven", "Author"=>"Edgar Allen Poe");
  $keys=array_keys($poem);
  print"The original array:<br />";
  print_r($poem);
  print"The keys:<br />";
  print_r($keys);

?>
</pre>
</b>
</body>
</html>
