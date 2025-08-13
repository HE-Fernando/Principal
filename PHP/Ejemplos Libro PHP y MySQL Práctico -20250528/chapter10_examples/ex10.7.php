<html><head><title>Processing First Form</title></head>
<body bgcolor = "lightgreen"><font size="+1">
<p>
<b>The Contents of the $_REQUEST Array</b>
<?php

   foreach ($_REQUEST as $key=>$val){
      echo "$key => $val <br />";
   }

?>
</p>
</body>
</html>
