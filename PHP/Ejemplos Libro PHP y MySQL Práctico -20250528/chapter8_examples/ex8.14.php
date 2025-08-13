<html>
<head><title>The foreach Loop</title></head>
<body bgcolor="lightgreen">
<b>
<?php
   $colors=array('red','green', 'blue', 'yellow');
   $employee=array('Name' => 'Jon Doe',
                   'ID' => '23d4',
                   'Job Title'=> 'Designer',
                   'Department'=>'Web Development',
   );
   foreach ($colors as $value){ // Each value is stored in $value
      echo "$value <br>";
   }
   echo "<hr>";
   foreach ($employee as $key => $value){ // Associative array
      echo "employee[$key] => $value<br>";
   }

?>
</b>
</body>
</html>
