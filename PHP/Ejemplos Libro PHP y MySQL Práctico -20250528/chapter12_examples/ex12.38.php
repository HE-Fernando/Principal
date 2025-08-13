<?php

  $fh=fopen("moredata.txt", "r");
  while(! feof($fh)){
     $text = fgets($fh);
     $newstring=preg_replace("/mama (monkey|bird)/i", "Papa $1",$text) ;
     print $newstring;
  }
  rewind($fh);
  # Forward lookahead
  print"-------lookahead---------\n";
  while(! feof($fh)){
     $text = fgets($fh);
     $newstring=preg_replace("/mama (?=monkey|bird)/i", "Papa ",$text) ;
     print $newstring;
  }

?>
