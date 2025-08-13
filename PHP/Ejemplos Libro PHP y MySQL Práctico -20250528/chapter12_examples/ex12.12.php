<?php

  $alpha="PORT OF SAN FRANCISCO";
  $array=preg_split("/\s/", $alpha, -1, PREG_SPLIT_OFFSET_CAPTURE);
  echo "<h2>Splitting A Word into Letters</h2>";
  print_r($array);

?>
