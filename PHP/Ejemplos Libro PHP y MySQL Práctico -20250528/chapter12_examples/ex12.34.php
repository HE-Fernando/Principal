<?php

  $fh=fopen("data.txt", "r");
  while( ! feof($fh)){
     $text = fgets($fh);
     if(preg_match("/(Steve)\s(Blenheim)/",$text, $matches)){
        echo "$matches[0]\n";
        echo "$matches[1]\n";
        echo "$matches[2]\n";
     }
  }

?>
