<?php

  $alpha="SAN FRANCISCO";
  $array=preg_split("//", $alpha, -1, PREG_SPLIT_NO_EMPTY);
  echo "<h2>Splitting A Word into Letters</h2>";
  print_r($array);

?>
