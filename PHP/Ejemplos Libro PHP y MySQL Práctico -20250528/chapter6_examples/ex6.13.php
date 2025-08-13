<html>
<head><title>The strcmp() Function</title></head>
<body bgcolor="lavendar">
<font face="verdana">
<pre>
<h3>Comparing Stings</h3>
<?php

  $string1 = "Dan";
  $string2 = "Daniel";

  print "strcmp( '$string1', '$string2' ) outputs " . strcmp( $string1, $string2 );
  print "\nstrcmp( '$string2', '$string2' ) outputs " . strcmp( $string2,$string2 );
  print "\nstrcmp( '$string2', '$string1' ) outputs " . strcmp( $string2, $string1 );
  print "\nstrcmp( 'dan', 'Dan' ) outputs " . strcmp( 'dan', 'Dan');
  print "\nstrcmp( 'Dan', 'dan' ) outputs " . strcmp( 'Dan', 'dan');

?>
<pre>
</body>
</html>
