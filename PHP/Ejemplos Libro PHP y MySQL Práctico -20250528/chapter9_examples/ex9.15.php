<html><head><title>Function Arguments</title></head>
<body bgcolor="lightgreen"><font size="+1" face="arial">
<?php

  function raise_sal(){
     $GLOBALS['salary'] *= 1.1;
  }
  $salary = 50000;
  raise_sal();

?>
Congratulations! Your new salary is $<?=$salary?>.<br>
</body>
</html>
