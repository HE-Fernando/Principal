<?php

  $page_name = $_REQUEST['name'];
  /* http://localhost/exemples/page.php?name=about_us */
  // Get the body of the page
  mysql_connect("localhost","root","") or die(mysql_error());
  mysql_select_db("test") or die(mysql_error());
  $sql = "SELECT * from pages WHERE name='$page_name'";
  /*
 --------------What is being selected from the database--------------
+----------+------------------------------------------------------------------------+
| name | body
|
+----------+------------------------------------------------------------------------+
| about_us | <h1>About Us</h1> ACME Toys has been established in 1850 to provide toys
| to children all over the world
+----------+------------------------------------------------------------------------+
1 row in set (0.00 sec)
----------------------------------------------------------------------
*/
  $result = mysql_query($sql) or die(mysql_error() );
  // If the page is not found, redirect to a static page
  if(mysql_num_rows($result) == 0 ) {
     header("Location: page_not_found.html");
  }
  $row = mysql_fetch_assoc( $result );
  $body = stripslashes( $row["body"] );
  // Include the header
  include("header.inc");
  // Print the body of the page
  echo $body;
  // Include the footer
  include("footer.inc");

?>
