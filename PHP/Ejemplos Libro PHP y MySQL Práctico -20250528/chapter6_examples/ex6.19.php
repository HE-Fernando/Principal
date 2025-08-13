<html><head><title>Text that is Similar</title>
</head>
<body bgcolor="silver">
<font size="+1">
<?php

  $string1 = "I attended a funeral.";
  $string2 = "He attended a fun rally.";
  print "First string: $string1\n<br>";
  print "Second string: $string2\n<br>";
  $distance=levenshtein("$string1", "$string2");
  print "It would take $distance changes to transform string1 into string2.<br>";

?>
</font>
</body>
</html>
