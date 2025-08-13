<html><head><title>Processing Form</title>
</head>
<body>
<?php

 if(! empty ($_GET) ){
    die("Parameter wrong. Try again<br>");
 }
 if( $_POST['send'] == "submit"){
  // Medium style; use superglobal array
    $name = $_POST['your_name'];
    $phone = $_POST['your_phone'];
    $email = $_POST['your_email_addr'];
  } 
?>
<div align="center"
<table>
<tr><td><font face="verdana" size="+1" color="#000066">
 Welcome PHP, <em><?= $name ?>.</em>
</td></tr>
<tr><td><font face="verdana" size="+1" color="#000066">
 Can I call you at <em><?=$phone ?>? </em>
</td></tr>
<tr><td><font face="verdana" size="+1" color="#000066">
 Is it ok to send you email at <em><?=$email ?>?</em>
</td></tr>
</table>
</div>
</body>
</html>
