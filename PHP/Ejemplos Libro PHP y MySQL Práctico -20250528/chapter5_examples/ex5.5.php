<html>
<head><title>Auto-increment and Auto-decrement</title></head>
<body bgcolor="6699ff">
<?php>
  $x=5; $y=0;
  $y = ++$x; // add 1 to $x first; then assign to $y
  print "<h3>Pre-increment:<br>";
  print "\$y is $y.<br>";
  print "\$x is $x.<br>";
  print "<hr>";
  $x=5; $y=0;
  $y = $x++;
  print "Post-increment:<br>";
  print "\$y is $y. <br>";
  print "\$x is $x. <br>";
?>
</body>
</html>
