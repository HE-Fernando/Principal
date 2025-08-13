<html><head><title>Appending</title></head>
<body bgcolor="lightgreen">
<font face="verdana" size="+1">
<?php

  $name="John Doe";
  $address="1001 Logic Dr.";
  $email="johndoe@place.gov";
  $title="VP";
  $outputstring="$name\t$address\t$email\t$title\n";
  $filename="$_SERVER[DOCUMENT_ROOT]/../mydir/info.txt";
  $filehandle=fopen($filename, "ab");
  if( fwrite($filehandle, $outputstring,
    strlen($outputstring))==FALSE){
    echo "You cannot write to the $filename.<br>";
  }
  else{
    $text= file_get_contents("$filename");
    echo "<pre>$text</pre>";
  }
  fclose($filehandle);

?>
</body>
</font>
</html>
