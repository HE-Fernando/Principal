<html>
<head><title>Random Array of Two Strings</title></head>
<body bgcolor="lightgreen">
<font face="verdana" size="+1">
<?php

    $sayings=array("An apple a day keeps the doctor away",
		   "Too many cooks spoil the broth",
		   "A stitch in time saves 9",
	           "Don't put the cart before the horse",
                  );
   $selection = array_rand($sayings,2);
   print "${sayings[$selection[0]]}.<br />";
   print "${sayings[$selection[1]]}.<br />";

?>
</body>
</html>
