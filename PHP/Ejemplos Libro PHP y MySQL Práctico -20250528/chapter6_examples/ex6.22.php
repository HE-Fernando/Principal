<html><head><title>The trim() Function</title>
</head>
<body bgcolor="lavender">
<font size="+1">
<h3>Padding a String</h3>
<b>
<pre>
<?php
 $name="Elvis Presley";
 $prof="Singer";
 echo str_pad("Name:",15).$name,"<br>" ;
 echo str_pad("Profession:",15). $prof,"<br>" ;
 echo "<br>";
 $string="Table of Contents";
 echo str_pad($string, 25, "-=",STR_PAD_BOTH), "<br>";
?>
</b>
</body>
</html
