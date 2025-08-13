<html><head><title>Open a File</title></head>
<body bgcolor="lavender">
<pre>
<?php

 //$filename="c:/wamp/www/exemples/data.file";
 $filename="$_SERVER[DOCUMENT_ROOT]/exemples/data.file";
 if (!file_exists($filename)){ // Check for file existence
   print "No such file or directory";
   exit();
 }
  $fh=fopen($filename,"r"); // Open the file for reading
  while( !feof($fh)){
      $line_of_text=fgets($fh); // Get text line from the file
      print "$line_of_text";
  }
  fclose($fh); // Close the file

?>
</pre>
</body>
</html>
