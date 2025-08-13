<?php

  foreach ($_REQUEST as $key => $value){
    echo "User input= <b>$value</b><br />";
  }
?>
<?php

  foreach ($_REQUEST as $key => $value){
    echo "User input= <b>".stripslashes($value)."</b><br>";
  }
?>
