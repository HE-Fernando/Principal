<?php

  $fh=fopen("data.txt", "r");
  while( ! feof($fh)){
    $text = fgets($fh);
    if(preg_match("/[a-z] [0-5]/",$text)){
      echo "$text";
    }
  }

?>
