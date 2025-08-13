<html><head><title>Appending</title></head>
<body bgcolor="lightgreen">
<font face="verdana" size="+1">
<?php

  $filename="c:\wamp\www\logo_i.gif"; // Windows
  if( file_exists("$filename")){
    echo "<img src=".'logo_i.gif'."><br />";
  }
  else{
    echo "<em>$filename</em> doesn't exist.<br>";
    exit();
  }

?>
</body>
</font>
</html>
