<?php

  $fh=fopen("data.txt", "r");
  while( ! feof($fh)){
    $text = fgets($fh);
    if(preg_match("/\s\d{3}$/",$text)){
       echo "$text";
    }
  }

?>
