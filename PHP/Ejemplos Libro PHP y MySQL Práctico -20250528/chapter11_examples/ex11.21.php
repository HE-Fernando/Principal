<html><head><title>Handling Errors</title></head>
<body bgcolor="lavender">
<font face="verdana" size="+1">
<?php

  $name="Joe Shmoe Jr.";
  $address="100 Main St.";
  $email="jshmoe@whatever.mil";
  $title="Major";
  $outputstring="$name\t$address\t$email\t$title\n";
  $filename="info.txt";
  // Suppress error message, if there is one
  @ $fp=fopen($filename, "w");
  if (! $fp ){
     echo "Error: You don't have permission to open this file.<br>";
     exit();
  }
  fwrite($fp, $outputstring, strlen($outputstring));
  echo "Output was sent to $filename<br>";
  fclose($fp);

?>
</body>
</font>
</html>
