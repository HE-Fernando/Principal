<html><head><title>Adding Slashes to Characters</title>
</head>
<body bgcolor="lightgreen">
<h3>The addslashes() Function</h3>
<font size="+1">
<?php
   $last_name=$_GET[last_name];
   if (get_magic_quotes_gpc() == 1){
     echo "get_magic_quotes_gpc() is on<br>";
     $query=("SELECT first_name, last_name from Persons WHERE
      last_name='$last_name'");
      echo $query;
   }
  else{
     $query=addslashes("SELECT first_name,
     last_name from Persons WHERE last_name='$last_name'");
  }
?>
</body>
</html>
