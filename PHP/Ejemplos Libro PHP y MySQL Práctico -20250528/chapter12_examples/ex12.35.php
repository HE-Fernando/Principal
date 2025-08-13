<?php

  $fh=fopen("data.txt", "r");
  while( ! feof($fh)){
     $text = fgets($fh);
     $new=preg_replace("/(Betty)\s(Boop)/",'$2, $1',$text);
     echo "$new";
  }

?>
