<?php

  print "Opening the connection to the database server<br>";
  mysql_connect("localhost", "root");
  print "Selecting a database<br>";
  $result = mysql_select_db( "addressbook" );
  if ( $result ) {
     print "Database selected successfully<br>";
  } 
  else {
     $error_message = mysql_error();
     print "There was a problem with 
     the database selection:<br>";
      print $error_message;
  }

?>
