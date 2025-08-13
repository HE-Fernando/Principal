<html>
<head><title>Equality and Identity</title></head>
<body bgcolor="lightgreen">
<font face="arial" size='+1'>
<?php

  $pets=array('dog', 'cat', 'bird');
  $animals=array(1=>'cat',0 =>'dog', "2" => 'bird');
  if ($pets == $animals){ // key/value pairs are equal
     echo "\$pets and \$animals are equal.<br />";
  }
  else{
     echo "\$pets and \$animals are not equal.<br />";
  }
  if ($pets === $animals){ /*key/value pairs must be in the same
                           order and keys are of the same type */
     echo "\$pets and \$animals are identical.<br />";
  }
  else{
     echo "\$pets and \$animals are not identical.<br />";
  }
  $pets=array('dog','cat', 'bird');

  // Reorder key/values
  $animals=array(0=>'dog', 1=>'cat', 2=> 'bird');
  if ($pets === $animals){
     echo "Now \$pets and \$animals are identical.<br />";
  }

?>
</body>
</html>
