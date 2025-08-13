<?php

 $fh=fopen("data.txt", "r");
 while(! feof($fh)){ 
     $text = fgets($fh);
     $newtext=preg_replace("/\W\D/","XX",$text);
     echo "$newtext";
 }
 
?>
