<html>
<head><title>Getting a Random Array Element</title></head>
<body bgcolor="lightgreen">
<font face="verdana" size="+1">
<?php

   $sayings=array("An apple a day keeps the doctor away",
                  "Too many cooks spoil the broth",
                  "A stitch in time saves 9",
                  "Don't put the cart before the horse",
   );
   $selection = array_rand($sayings);
   print $selection; // Prints the index value

?>
<b><?=$sayings[$selection]?></b>. <!-- Prints the random value -->
</body>
</html>
