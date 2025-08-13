<html><head><title>Processing First Form</title>
</head>
<body bgcolor = "lightgreen"><font size="+1">
<h2>Here is the form input:</h2>
<?php

  $name = $HTTP_GET_VARS['name']; // Long style with GET method
  $phone = $HTTP_GET_VARS['phone'];
  $email = $HTTP_GET_VARS['email_addr'];
  print "Welcome to PHP $name<br />";
  print "Can I call you at $phone<br />";
  print "Is it ok to send you email at $email<br />";

?>
</body>
</html>
