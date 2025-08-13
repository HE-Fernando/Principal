<html>
<head><title>Search and Replace</title></head>
<body>
<?php
   $text = "Icecream is good for you. You should eat icecream daily.";
   $modified_text = str_replace( "icecream", "broccoli", $text );
   print "original: $text";
   print "<br>";
   print "modified: $modified_text";
?>
</body>
</html>
