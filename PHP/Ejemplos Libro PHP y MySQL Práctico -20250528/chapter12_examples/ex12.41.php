<html><head><title>Finding Patterns</title></head>
<body bgcolor="silver">
<font face=verdana">
<b>
<?php

  $filename="$_SERVER[DOCUMENT_ROOT]/../mydir/datebook";
  $lines = file($filename);
  $area_code=trim($_POST['area_code']);
  echo "<H2>Names and Phones in $area_code area code</h2>";
  foreach ($lines as $the_line) {
     $fields=explode(":",$the_line);
     $name=$fields[0];
     $phone=$fields[1];
     $address=$fields[2];
     $birthday=$fields[3];
     $salary=$fields[4];
     if( preg_match("/^$area_code-/","$phone")){
        echo "$name: $phone<br />";
        $count++;
     }
  }
  if ($count == 0 ){
     echo "The area code is not found.<br>";
  }

?>
</b>
</font>
</body>
</html>
