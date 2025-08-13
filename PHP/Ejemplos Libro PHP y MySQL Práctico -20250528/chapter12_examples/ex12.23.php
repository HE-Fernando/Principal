<?php

  $fh=fopen("data.txt", "r");
  while( ! feof($fh)){
    $text = fgets($fh);
    if(preg_match("/h\s\d\d\d/",$text)){
      echo "$text";
    }
  }

?>
