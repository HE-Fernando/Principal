<html>
<head><title>Breaking Lines</title></head>
<body bgcolor="silver">
<h2>Breaking Lines</h2>
<h3>Using Escape Sequences</h3>
<pre>
<?php

  // Backslash sequences within the <pre> tag
  print "Goofy Rufus\n";
  print "123 Fantasia Street\n";
  print "San Francisco, CA 94111\n";

?>
</pre
<h3>Using the HTML &lt;br&gt; Tag</h3>
<?php

   print "Goofy Rufus\n<br>"; // The <br> tag within the strings
   print "123 Fantastia Street\n<br>";
   print "San Francisco, CA 94111\n<br>";

?>
<h3>Using the PHP <em>nl2br()</em> Function</h3>

<?php

  $address="Goofy Rufus
  123 Fantasia Street
  San Francisco, CA 94111
  ";
  // the nl2br() function replaces newlines with <br />
  print nl2br("$address");

?>
</body>
</html>
