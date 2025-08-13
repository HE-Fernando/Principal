<html><head><title>Validate an Email Address</title>
<body bgcolor="#ccffcc">
<font size="+1" color="darkblue">
<h1>Validating Email</h1>
<?php

  $errors=array();
  if(isset($_REQUEST['submit'])){
     validate_input();
     if(count($errors) != 0){
        show_form();
     }
     else{ echo "<b>OK! Go ahead and Process the form</b><br>";
        echo "<em><b>$_REQUEST[email]</em></b> is a valid email address.<br>";
     }
  }
  else{
     show_form();
  }

  function validate_input(){
    global $errors ;
    $email=stripslashes(trim( $_POST['email'] ));
    if($email == ""){ // Did the user enter anything?
       $errors['email']="<b><font color='red'>***Email address?***</font><b>";
    }
    else{
       $ok=validate_email($email);
       if ( ! $ok ){
          $errors['email']="<b><font color='red'>***Invalid
          email address***</font></b>";
       }
    }
  }
  function validate_email($email) {
     $regex="/^[a-zA-Z][\w \.\-]+[a-zA-Z0-9]@([a-zA-Z0-9][a-zA-Z0-9\-]*\.)+[a-zA-Z]{2,4}$/";
     if ( preg_match($regex, $email)){
         return true;
     }
     else{
        return false;
     }
  }
  function show_form(){
     global $errors;
     extract($_REQUEST);
?>
<form method=POST action="<?php echo $_SERVER['PHP_SELF']?>">
<table cellspacing="0" cellpadding="2">
<tr>
<b> Email address:</b>
<td><input type="text" size=30
name="email"
 value="<?php echo $email;?>">
<br>
 <?php echo $errors['email'];?>
</td>
</td>
</tr>
<tr>
<td>&nbsp</td>
</tr>
<tr>
<td><input type="submit"
name="submit"
</tr>
<br>
</table>
</form>
<?php
}
?>
</b>
</div>
</body>
</html>
