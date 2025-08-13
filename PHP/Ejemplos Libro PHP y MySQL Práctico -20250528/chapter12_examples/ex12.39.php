<?php

  $fh=fopen("moredata.txt", "r");
  while(! feof($fh)){
     $text = fgets($fh);
     $newstring=preg_replace("/(?<=ma )[MC][a-z]+/", "Goose",$text) ;
     print $newstring;
  }

?>
