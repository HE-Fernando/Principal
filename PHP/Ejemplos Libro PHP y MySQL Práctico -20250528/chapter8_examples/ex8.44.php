<html>
<head><title>Combining Arrays</title></head>
<body bgcolor="lightblue">
<h3>Combining Arrays</h3>
<pre>
<?php

  $abbrev=array('CA', 'MT', 'VA');
  $states=array('California','Montana','Virginia');
  echo 'After combining $abbrev and $states',"<br>";
  $combined=array_combine($abbrev, $states);
  print_r($combined);

?>
<pre>
</body>
</html>
