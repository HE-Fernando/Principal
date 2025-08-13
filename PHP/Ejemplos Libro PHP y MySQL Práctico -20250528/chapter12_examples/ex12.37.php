<?php

  $fh=fopen("data.txt", "r");
  while( ! feof($fh)){
     $text = fgets($fh);
     list($fname, $lname, $number)=preg_split("/\s+/",$text);
     $new_number=preg_replace("/(\d{3})$/e",'$1 * 1.1',$number);
     printf("%.2f\n", $new_number);
  }

?>
