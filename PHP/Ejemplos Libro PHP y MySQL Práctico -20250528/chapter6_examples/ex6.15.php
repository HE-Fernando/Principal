<html><head><title>The strncasecmp() Function</title></head>
<body>
<h3>Comparing Strings by Limit of Characters</h3>
<?php
  $str1="chronometer";
  $str2="Chronology";
  if ( strncasecmp($str1,$str2, 5)==0){
    print "The first 5 characters of <em>$str1</em> are the
     same as the first 5 characters in <em>$str2 </em><br>";
  }
  else{
    print "They do not compare.<br>";
  }
?>
</body>
</html>
