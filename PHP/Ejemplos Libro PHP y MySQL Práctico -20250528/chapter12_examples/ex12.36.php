<?php

  $fh=fopen("data.txt", "r");
  while( ! feof($fh)){
     $text = fgets($fh);
     $new_text=preg_replace("/(\w+)\s(\w+)\s(\w+)/",'$2, $1 $3', $text);
     echo "$new_text";
   }

?>
