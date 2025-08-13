<?php

  # $filename = "c:\\wamp\\www\\exemples\\ch11files\\tulips.jpg";
   $filename = "YellowBulb.jpg";
  # $filename = "c:/wamp/www/exemples/ch11files/tulips.jpg";
  $handle = fopen($filename, "rb");
  $contents = fread($handle, filesize($filename));
  header("Content-type: image/jpeg");
  echo $contents;
  fclose($handle);

?>
