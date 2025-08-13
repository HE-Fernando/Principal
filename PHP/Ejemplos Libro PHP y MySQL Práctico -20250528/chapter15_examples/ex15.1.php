<?php

  print "Opening the connection to the database server<br>";
  $link = mysql_connect("localhost","root");
  print "The connection worked. The link is: $link <br>";
  print "Closing the connection<br>";
  mysql_close( $link );

?>
