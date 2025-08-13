<html><head><title>The substr_count() Function</title>
</head>
<body bgcolor="lavender">
<font size="+1">
<h3>Counting Substrings</h3>
<?php

  $text = "One little, two little, three, little Indians...";
  echo '$text= '. "$text<br>";
  echo '<b>substr_count($text,"little") </b>counts: ' ;
  echo substr_count($text,"little");
  echo '<br><b>substr_count($text,"little", 5) </b>counts: ' ;

?>
</body>
</html>
