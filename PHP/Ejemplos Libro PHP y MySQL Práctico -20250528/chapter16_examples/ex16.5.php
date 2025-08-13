<?php

  $date_str="l dS \of F Y h:i:s A";
  $last_visit="Your last visit was on ". date("$date_str");
  $expire=60*60*24*30 + time(); // One month
  setcookie("message","$last_visit", $expire);

?>
