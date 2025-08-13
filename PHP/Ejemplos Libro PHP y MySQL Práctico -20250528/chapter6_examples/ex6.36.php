<html><head><title>The stripslashes() Function</title>
</head>
<body>
<form action="form.php" method="post">
<textarea rows=3 cols=30 name="story" </textarea>
<br>
<input type=submit name="submit">
<input type=reset>
</form>
<?php

   if (isset($_POST['submit'])){
     $input=$_POST["story"];
     print stripslashes($input);
   }

?>
</body>
</html>
