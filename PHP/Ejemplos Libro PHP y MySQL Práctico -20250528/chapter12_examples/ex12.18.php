<?php

  $fh=fopen("data.txt", "r");
  while( ! feof($fh)){
    $text = fgets($fh);
    $newtext=preg_replace("/J../", "Daniel", $text);
    echo "$newtext";
  }

?>
