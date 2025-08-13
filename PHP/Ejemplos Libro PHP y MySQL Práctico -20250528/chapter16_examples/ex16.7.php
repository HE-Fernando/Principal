<?php

   ob_start(); // Turn on output buffering

?>
<html><head><title>The Cookie Array?</title>
</head>
<body bgcolor="lavender">
<font face="verdana" size='+1'>
<h2>$_COOKIE[]</h2>
<?php

  setcookie("usr","Ellie Quigley");
  setcookie("color","blue");

?>

<?php

  if(! empty($_COOKIE[color])){
     echo "<pre>";
     print_r($_COOKIE);
     echo "</pre>";
  }

?>
</font>
</body>
</html>

<?php

  ob_end_flush(); // Flush the buffer and end output buffering

?>
