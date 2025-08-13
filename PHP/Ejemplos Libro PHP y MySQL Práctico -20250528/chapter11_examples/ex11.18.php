<html><head><title>Is it a Regular File?</title></head>
<body bgcolor="lightgreen">
<font face="verdana" size="+1">
<?php

  $filename="c:\wamp\www";
  if(is_file($filename)){
     echo "$filename exists and is a regular file.<br>";
  }
  else{
    echo "<em>$filename</em> is not a regular file.<br>";
    exit();
  }

?>
</body>
</font>
</html>
