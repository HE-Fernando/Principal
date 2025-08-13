<html>
<head><title>String Concatenation</title></head>
<body bgcolor="silver">
<h3>String Concatenation</h3>
<pre>
<?php
  $name = 'Ellie Quigley';
  $street = '123 Main Street';
  $city = 'San Francisco';
  $state = 'CA';
  $zip = '94107';
  $address="Name: " . "$name\n" . "Address: " . "$street\n" .
  "Zip: ". $zip ."\n";
  print $address;
  print "..............................\n";
?>
</pre>
</body>
</html>
