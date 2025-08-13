<html><head><title>Reading and Outputting a File</title></head>
<body bgcolor="lightblue">
<h3>Reading and Outputting a File</h3>
<b>
<pre>
<?php

   $number_of_bytes=@readfile("data.file");
   echo "<br>Read $number_of_bytes bytes from the file.<br>";

?>
</pre>
</b>
</body>
</html>
