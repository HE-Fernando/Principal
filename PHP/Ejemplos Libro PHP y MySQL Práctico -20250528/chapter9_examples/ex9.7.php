<?php

  $grades=array(40,90,89,93,75);
  $result = average($grades); // Pass an array
  print "The average grade is $result.<br>";
  function average($scores){

    $sum = 0;
    $size = count($scores); // Find the size of the array
    if ( $size == 0 ){
      echo "Empty parameter list<br>";
      exit(); } // Exit the script here
      for($i = 0; $i < $size; $i++){
          $sum += $scores[$i];
      }
    return $sum/$size; // Return the average
}

?>
