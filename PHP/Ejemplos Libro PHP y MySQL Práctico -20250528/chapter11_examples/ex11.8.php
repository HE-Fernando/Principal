<head><title>Open a File</title></head>
<body bgcolor="lavender">
<?php

  $filename="$_SERVER[DOCUMENT_ROOT]/../mydir/data.file";
  $filehandle=fopen($filename, "r");
  $total_bytes=filesize($filename);
  $contents=fread($filehandle,$total_bytes);
  fseek($filehandle, 0); // Go back to the beginning of the file
  $contents=fread($filehandle, $total_bytes);
  echo "Reading from the beginning of the file:<br>
  <pre>$contents</pre>";fseek($filehandle, -40, SEEK_END );
  $contents=fread($filehandle, $total_bytes);
  echo "Reading from the end of the file:<br>
  <pre>$contents</pre>";
  fclose($filehandle);

?>
</body>
</html>
