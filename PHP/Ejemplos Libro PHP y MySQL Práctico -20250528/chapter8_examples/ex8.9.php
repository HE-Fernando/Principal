<html>
<head><title>The print_r() Function</title></head>
<body bgcolor="CCFF66">
<pre>
<b>
<?php

  $colors=array('red','green', 'blue','yellow');
  $book=array('Title' => 'War and Peace',
              'Author' => 'Tolstoy',
              'Publisher' => 'Oxford University Press',
  );
 $display= print_r($colors,true); // Assign output to $display
 echo $display;
 reset($colors);
?>
</b>
</pre>
</body>
</html>
