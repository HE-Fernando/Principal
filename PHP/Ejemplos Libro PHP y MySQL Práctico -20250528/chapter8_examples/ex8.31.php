<html><head><title>Sorting an Array</title></head>
<body bgcolor="CCFFFF">
<font size="+1">
<pre>
<b>
Sorting an Array Numerically
<br />
<?php

  $animals = array("5 dogs", "15 cats", "10 horses", "1 monkey", "1 gorilla", "2 zebras");
  sort($animals, SORT_NUMERIC);
  print_r($animals);

?>
</pre>
</b>
</body>
</html>
