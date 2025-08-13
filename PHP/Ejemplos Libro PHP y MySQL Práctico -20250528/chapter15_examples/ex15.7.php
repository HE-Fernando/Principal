<?php

  mysql_connect("localhost", "root", "");
  mysql_select_db( "northwind" );

  print "Executing SQL...<br>";
  $result_set = mysql_query( "SELECT ShipName FROM orders");
  $num_rows = mysql_num_rows( $result_set );

  print "<b>There are a total of $num_rows ship names 
              in the \"orders\" table.";
?>



