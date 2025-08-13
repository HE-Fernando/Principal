<html>
<head><title>Getting the Data Type with gettype()</title>
</head><body bgcolor="lightblue">
<font face = "arial" size = '+1'>
<pre>
<?php
print "Type <b>5623</b> is: " . gettype(5623) . ".\n";
print "Type <b>-22</b> is: " . gettype(-22) . ".\n";
print "Type <b>15.3</b> is: " . gettype(15.3) . ".\n";
print "Type <b>5e3</b> is: " . gettype(5e3) . ".\n";
print "Type <b>\"Hi\"</b> is: " . gettype("Hi") . ".\n";
print "Type <b>true</b> is: " . gettype(true) . ".\n";
print "Type <b>false</b> is: " . gettype(false) . ".\n";
print "Type <b>null</b> is: " . gettype(null) . ".\n";
print "Type <b>\$nothing</b> is: " . gettype($nothing) . ".\n";
?>
</body>
</html>
