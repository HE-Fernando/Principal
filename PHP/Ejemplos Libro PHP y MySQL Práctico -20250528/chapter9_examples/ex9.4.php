<html><head><title>Variable Arguments</title></head>
<body bgcolor = "#ffffcc">
<font face="verdana" size="+1">
<pre>
<?php

 average(40,90,89,93,75); // Arguments must be literals
 function average(){
    $sum = 0;
    $all_args = func_get_args();
    print_r($all_args);
    $size = func_num_args();
    for($i = 0; $i < $size; $i++){
        $sum += func_get_arg($i);
 } 
  print "The average is:" . $sum/$size ."<br>";
}

?>
</pre>
</body>
</html>
