<?php

  $old_string="I live in New Orleans.";
  print "Orginial string: <em>$old_string</em><br />";
  $new_string=preg_replace("/New Orleans/", "Philadelphia", "$old_string");
  print "New string: <em>$new_string</em><br />";

?>
