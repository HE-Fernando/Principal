<head><title>Read a Character at a Time</title></head>
<body bgcolor="lavender">
<pre>
<?php

 $filename="$_SERVER[DOCUMENT_ROOT]/exemples/data.file";
 if (!file_exists($filename)){
    print "No such file or directory";
    exit();
 }
 $fh=fopen($filename,"r");
 while( ! feof($fh)){
   $char=fgetc($fh);
   if ($char == "\n"){ $char="<br /><br />";}
      print $char;
   }
 fclose($fh);

?>
</pre>
</body>
</html>
