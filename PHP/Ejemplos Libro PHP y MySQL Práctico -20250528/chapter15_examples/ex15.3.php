<html><head><title>MySQL Query in PHP</title></head>
<body bgcolor="lightblue">
<font size='+1' face='arial'>
<?php

  print "Opening the connection to the database server<br>";
  $link = mysql_connect("localhost", "root", "");
  print "Selecting the 'northwind' database<br>";
  mysql_select_db("northwind");
  $query="UPDATE Shippers SET phone='(777) 430-2346'
    WHERE CompanyName = 'Federal Shipping'";
  $result= mysql_query($query);
  $rows_affected=mysql_affected_rows($link); /* numbers of rows
   affected by the most recently executed query */
  echo "You have updated $rows_affected rows.<br>";
  if ($result){
    print "Query successful!<br>";
  }
  else{
    die("Query failed.". mysql_error());
  }
  print "Closing the connection<br>";
  mysql_close( $link );

?>
</body>
</html>
