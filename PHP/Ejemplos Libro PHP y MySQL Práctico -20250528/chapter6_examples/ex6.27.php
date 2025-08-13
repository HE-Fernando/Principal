<html><head><title>The strchr Function</title>
</head>
<body bgcolor="lavender">
<font size="+1">
<h3>Searching for a Character</h3>
<?php

  $address="15 Sleepy Hollow Rd, Boston, Massachussetts";
  print "$address<br>";
  $state=strrchr($address, "M");
  print "$state<br>";
  $path="C:\\Documents and Settings\\Ellie Quigley\\My Documents";
  print "$path<br>";
  print strrchr($path, "\\");

?>
</body>
</html>
