<head><title>The preg_grep() Function</title></head>
<body bgcolor="lavender">
<font face="verdana" >
<b>
<h2>The preg_grep() Function</h2>
<font size="+1">
<pre>
<?php

  $regex="/Pat/";
  $search_array=array("Margaret","Patsy", "Patrick", "Patricia", "Jim");
  sort($search_array);
  $newarray=preg_grep( $regex, $search_array );
  print "Found ". count($newarray). " matches\n";
  print_r($newarray);
  $newarray=preg_grep($regex,$search_array, PREG_GREP_INVERT);
  print "Found ". count($newarray). " that didn't match\n";
  print_r($newarray);

?>
</b>
</pre>
</font>
</body>
</html>
