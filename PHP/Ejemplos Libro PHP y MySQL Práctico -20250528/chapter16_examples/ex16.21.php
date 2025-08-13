<?php

  ini_set('session.use_cookies', 0); // Turn cookies off
  session_start(); // Start a session

?>
<html>
 <body bgcolor="<?php echo ${_SESSION}['color'];?>">
<h3>
<?php

  print_r($_GET);
  echo "<br>The session id is " , session_id(), "<br>";
  echo "The session name is " , session_name(), "<br>";
  echo "SID is ", SID;

?>
</h3>
<h2>
Hi <?php echo ${_SESSION}['user'];?>. You like <b>
<?php echo ${_SESSION}['color']; ?></b>.
 <a href="ex16.22.php">
Click here</a>
</h3>
</body>
</html>
