<html>
<head><title>Extract Email</title></head>
<body>
<?php
  $email = "joe@yahoo.com";
  $user_name = substr( $email, 0, strpos($email,'@') );
  $domain = substr( $email, strpos($email,'@')+1 );
  print "user name: $user_name";
  print "<br>";
  print "domain: $domain";
?>
</body>
</html>
