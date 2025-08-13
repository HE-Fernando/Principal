<body bgcolor="lightgreen">
<font face="verdana" size="+1">
<?php

  $name="Jane Doe";
  $address="1 Sensible Ave.";
  $email="janedoe@school.edu";
  $title="Dean";
  $outputstring="$name:$address:$email:$title\n";
  $filename="$_SERVER[DOCUMENT_ROOT]/../mydir/info.txt";
  $filehandle=fopen($filename, "ab");
  if (flock($filehandle, LOCK_EX)) { // Acquire an exclusive lock
    fwrite($filehandle, $outputstring, strlen($outputstring));
    flock($filehandle, LOCK_UN); // Release the lock
  }
  else{
    echo "Coudn't lock this file.<br>";
    exit();
  }
  $text= file_get_contents("$filename");
  echo "<pre>$text</pre>";
  fclose($filehandle); // This would also release the lock

?>
</body>
</font>
</html>
