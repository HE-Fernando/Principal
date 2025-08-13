<?php

  ob_start(); // Turn on output buffering
  ini_set(session.use_cookies, 0); // Dont accept cookies

?>
<html><head><title>Sessions and Links</title>
</head>
<body bgcolor="lavender">
<font face="verdana" size='+1'>
<h2>Sessions and Links</h2>
<?php

  session_start();
  $_SESSION['user']="John Doe";
  $_SESSION['color']="aqua";

?>

<?php

  if(! empty($_SESSION['color'])){
     echo "<pre>";
     print_r($_SESSION);
     echo "</pre>";
     $sid = session_id();
     echo "SessionID is ", $sid, "<br>";
  }

?>
 <a href="ex16.21.php"> Click here</a>
</font>
</body>
</html>
