<html>
<head><title>The foreach Loop--Changing Values by Reference
</title></head>
<body bgcolor="lightblue">
<b>
<pre>
Original array
<?php

  $val="hello";
  $years=array(44, 53, 64, 77);
  print_r($years);
  foreach ($years as &$val){ // $val is a reference
     $val += 1900;
     echo "$val<br>"; // $val is global in scope
  }
  echo "After foreach: \$val=$val<br>";

?>
<hr>
Array has been changed
<?php

 print_r($years);

?>
</pre>
</b>
</body>
</html>
