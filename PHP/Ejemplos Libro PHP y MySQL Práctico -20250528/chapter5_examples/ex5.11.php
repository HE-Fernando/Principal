<html><head><title>Logical OR Operator</title></head>
<body bgcolor=CCFF66><font face="arial" size="+1">
<?php
 extract($_REQUEST);
 if ( $place1 || $place2 || $place5 ){
    print "No fast food joints today, thanks!<br />";
 }
?>
</body>
</html>
