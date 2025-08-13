<html>
<head><title>Merging Arrays</title></head>
<body bgcolor="lightblue">
<h3>Merging Arrays</h3>
<pre>
<?php

 $primary=array('red', 'blue', 'yellow');
 echo '$primary=array("red", "blue", "yellow")',"<br />";
 $secondary=array('orange','purple','green');
 echo '$secondary=array("orange","purple","green")',"<br />";
 echo 'After merging $primary and $secondary',"<br />";
 $merged=array_merge($primary, $secondary);
 print_r($merged);

?>
<pre>
</body>
</html>
