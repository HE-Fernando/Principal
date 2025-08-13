<?php

  $string="My lovely gloves are lost in the clover, Love.";
  $result=preg_match_all("/love/",$string, $matches);
  if( $result== true){
     print "Found $result matches";
  }
  else {print "Didn't find a match";}
     print_r( $matches);

?>
