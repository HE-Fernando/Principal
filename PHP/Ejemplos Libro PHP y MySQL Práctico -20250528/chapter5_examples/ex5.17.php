<html><head><title>Conditional Statement</title></head>
<body bgcolor="lightgreen"><font size="+1">

<?php

 extract($_REQUEST);
 $price = ($age > 55)? 3.00: 8.50;
 print "$name, age $age pays \$$price for the Happy Meal
 Special! <br />";
?>

</body>
</html>
</body>
</html>
