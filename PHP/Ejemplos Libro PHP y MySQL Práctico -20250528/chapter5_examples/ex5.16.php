<head><title>head><title>Logical Operators</title></head>
<body bgcolor="330066" text="white"><font face="arial" size="+1">
<hr />
<?php
 $num1 = 50;
 $num2 = 100;
 $num3 = 0;
 print "50 && 100 is " . (int)($num1 && $num2) ;
 print "<br /> 0 && 100 is " . (int)($num3 && $num2) ;
 print "<br /> 50 || 100 is " . (int)($num1 || $num2) ;
 print "<br /> 0 || 100 is " . (int)($num3 || $num2) ;
 print "<br /> 100 || 0 is " . (int)($num2 || $num3) ;
 print "<br /> 50 xor 100 is " . (int)($num2 xor $num3);
 print "<br /> ! 100 is " . ! $num3 ;
 print "<br /> !(100 && 0) is " . !($num3 && $num2);
?>
<hr />
</body>
</html>
