<?php

  $fh=fopen("data.txt", "r");
  while( ! feof($fh)){
     $text = fgets($fh);
     $newtext=preg_replace("/B.* /","John ",$text);
     echo "$newtext";
  }
  echo "--------------------\n";
  rewind($fh);
  while( ! feof($fh)){
     $text = fgets($fh);
     $newtext=preg_replace("/B.*? /","John ",$text);
     echo "$newtext";
  }

?>
