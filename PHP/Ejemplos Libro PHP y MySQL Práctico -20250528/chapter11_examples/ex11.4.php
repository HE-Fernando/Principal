<html><head><title>Open a File</title></head>
<body bgcolor="lavender">
<pre>
<?php

  $filename="ex11.4.html";
  $fh=fopen("$filename", "r");
  while(!feof($fh)){
    $content=fgetss($fh);
    echo $content;
}

fclose($fh);

?>
</pre>
</body>
</html>
