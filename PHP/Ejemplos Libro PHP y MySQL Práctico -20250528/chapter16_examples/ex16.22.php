<?php

  session_start();
  extract($_SESSION);
  printf("%s",SID); // Print the session ID
  echo "The session id is " , session_id(), "<br>";

?>
<html>
<body bgcolor="<?php echo $color;?>">
<h2>
 Hi again <?php echo $user;?>. You still like <b><?php echo $color; ?></b>.
</h2>
</body>
</html>
