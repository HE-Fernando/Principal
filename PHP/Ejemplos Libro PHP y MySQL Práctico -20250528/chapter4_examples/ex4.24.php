<html><head><title>Processing First Form</title>
</head>
<body bgcolor = "lightgreen"><font size="+1">
<h2>Here is the form input:</h2>
<?php
  extract($_REQUEST, EXTR_SKIP); // Extracting the form input
 print "Welcome to PHP $your_name<br>"; // register_globals
// is off
 print "Can I call you at $your_phone<br>";
print "Is it ok to send you email at $your_email_addr<br>";
?>
</body>
</html>
