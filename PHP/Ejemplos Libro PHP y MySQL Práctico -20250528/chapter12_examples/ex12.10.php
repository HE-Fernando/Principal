<?php

  $colors="Primary:red,yellow,blue;Secondary:violet,orange, green";
  $array=preg_split("/[:,;]/", $colors);
  echo "<h2>Splitting Colors</h2>";
  print_r($array);
  foreach ($array as $key=>$value){
     if ($value == "Primary" || $value == "Secondary"){
        print "$value<br>";
     }
     else{
        print "\t$key: $value<br>";
     }
  }

?>
