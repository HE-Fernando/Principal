<html><head><title>Open a File</title></head>
<body bgcolor="lavender">
<?php

  $name="Joe Shmoe Jr.";
  $address="100 Main St.";
  $email="jshmoe@whatever.mil";
  $title="Major";
  $outputstring="$name\t$address\t$email\t$title\n";
  $filename="$_SERVER[DOCUMENT_ROOT]/../mydir/info.txt";
  $filehandle=fopen($filename, "wb");
  fwrite($filehandle, $outputstring, strlen($outputstring));
  fclose($filehandle);

?>
</body>
</html>
