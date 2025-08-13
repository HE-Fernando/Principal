<html><head><title>Open a File</title></head>
<body bgcolor="lavender">
<?php

  $filename="c:/wamp/www/exemples/data.file";
  $filehandle=fopen($filename, "rt");
  $contents=fread($filehandle, filesize($filename));
  print "<pre>$contents</pre>";
  fclose($filehandle);

?>
</body>
</html>
