<html><head><title>MySQL Fetch a Row</title></head>
<body bgcolor="lightblue">
<font size='+1' face='arial'>
<?php

print "Opening the connection to the database server<br>";
$link = mysql_connect("localhost", "root", "");
print "Selecting the 'northwind' database<br>";
mysql_select_db("northwind");


$query="SELECT CompanyName, Phone from Shippers";  

$result_set= mysql_query($query);

if ($result_set){
    print "Fetch the first row of data.<br>";
    $record= mysql_fetch_row($result_set);
   // print_r($record);
    foreach ($record as $value){
         print "<em>$value </em>";  // print the row
    }
   
    print "<br>";
   }
else{ die("Query failed.". mysql_error());
}

print "Closing the connection<br>";

mysql_close( $link );

?>
</body>
</html>

