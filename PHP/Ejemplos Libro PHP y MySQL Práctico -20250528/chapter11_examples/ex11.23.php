<html><head><title><Directory Functions</title></head>
<body bgcolor="aqua">
<font face="verdana">
<h3>Listing the Contents of a Directory</h3>
<b>
<?php

  $dirhandle=opendir("c:/wamp/mysql");
  // List all files in the directory
  while(false !== ($file=readdir($dirhandle))){
     echo $file,"<br>";
  }
  closedir($dirhandle);

?>
</font>
</b>
</body>
</html>
