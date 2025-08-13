<html><head><title>The str_tok() Function</title></head>
<body bgcolor="lavender">
<font size="+1">
<h3>Splitting a String into Tokens</h3>
<pre>
<?php

   $string = "Joe Shome:3/15/56:Boston, MA.";
   $delimiters=":,/ ";
   $token = strtok($string,$delimiters);
   $n=1;
   while($token){
        echo "Token $n: <b>$token</b><br>";
        $token=strtok($delimiters);
        $n++;
   }
?>
</pre>
</font>
</body>
</html>
