<html><head><title>Function Arguments</title></head>
<body bgcolor="lightgreen"><font face="verdana">
<?php

  function increase_font($size){
     static $total=0; // The value of $total will persist
     // between calls
     $newfont= $size++ ;
     $total += $newfont; // Keep a running total

?>
<font size='<?=+$newfont?>'>bigger<br>
<?php

    if ($total > 10){
       print "+$total: Too big.<br>";
       exit;
    }
  } // end function definition
  for ($n=0; $n<=10; $n++){
     increase_font($n);
  } 

?>
</body>
</html>
