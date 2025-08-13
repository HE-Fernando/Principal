<?php

  mysql_connect("localhost", "root");
  mysql_select_db( "test" );
  $result_set = mysql_query( "SELECT * FROM messages" );
  $num_messages = mysql_num_rows( $result_set );

?>

<html>
<body>

<h1>Guest Book</h1>

<i>There are a total of <?php echo $num_messages ?> posts on this website.</i>
<br><br><hr>

<?php

// Loop over all the posts and print them out.

  while( $row = mysql_fetch_assoc( $result_set ) ) {
     $subject = $row['subject'];
     $body = $row['body'];
     print "<strong>$subject</strong><br>";
     print "$body<br><br>";
  }

?>

