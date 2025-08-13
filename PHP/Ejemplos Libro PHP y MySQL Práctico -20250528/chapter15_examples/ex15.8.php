<?php

  mysql_connect("localhost", "root");
  mysql_select_db( "northwind" );
  print "Executing SQL...<br>";
  $result_set = mysql_query( "SELECT * FROM customers");
  print "<table>";
  // Print the headers
  for( $c=0; $c<mysql_num_fields( $result_set ); $c++ ) {
      print "<th>". mysql_field_name( $result_set, $c ) .
          "</th>";
  }
  // print all the rows
  while( $record = mysql_fetch_row( $result_set ) ) {
     print "<tr>";
     for( $c=0; $c<mysql_num_fields( $result_set ); $c++ ) {
        print "<td>". $record[$c] ."</td>";
     }
     print "</tr>";
  }
  print "</table>";

 
?>
