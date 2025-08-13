<?php

  $fh=fopen("data.txt", "r");
  while( ! feof($fh)){
    $text = fgets($fh);
    if(preg_match("/^\w\w\w\W/",$text)){
       echo "$text";
    }
  }

?>
