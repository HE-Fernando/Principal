<head><title>explode() Array</title></head>
<body bgcolor="black">
<font size="+1" color="white">
<pre>
<?php

  $colors="red green orange blue"; // Create a string
  echo "<b>\$colors is a ". gettype($colors)."\n";
  $colors=explode(" ",$colors); // Split up the string by spaces
  echo "<img src='explosion.jpg'>","\n";
  echo "<b>After explode():\$colors is an ".
  gettype($colors)."\n";
  print_r($colors);
  // Let's give explode() second parameter limiting
  // array size to 3 elements
  $colors=explode(" ","red green orange blue",3);
  echo "\n";
  print_r($colors);

?>
</pre>
</body>
</html>
