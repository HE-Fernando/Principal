<html><head><title>Shuffle the Array</title></head>
<body bgcolor="33FF66">
<div align="center">
<font size="+1">
<h3>
Shuffle the Array
</h3>
<?php

  $months=range(1,12);
  // srand(time());
  echo "<b>Before:</b> ", implode(", ", $months), "<br /><br />";
  shuffle($months);
  echo "<b>After: </b>", implode(", ", $months), "<br />";

?>
</font>
</div>
</body>
</html>
