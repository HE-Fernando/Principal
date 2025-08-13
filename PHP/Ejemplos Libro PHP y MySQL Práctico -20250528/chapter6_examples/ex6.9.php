<?php
  $number = 7634.887;
  // American format is the default: 7,643.89
  $us_format = number_format($number, 2);
  print "$us_format<br>";

 // French format: 7 634,89
  $french_format = number_format($number, 2, ',', ' ');
  print "$french_format<br>";

  // American format without thousands separator: 7634.89
  $us_format2 = number_format($number, 2, '.', '');
  print "$us_format2<br>";

?>
