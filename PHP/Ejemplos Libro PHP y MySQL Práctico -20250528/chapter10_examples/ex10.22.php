<html><head><title>Empty Fields</title>
<body><div align="center">
<h2>Validating Input</h2>
<?php

  $errors=array();
  if(isset($_REQUEST['submit'])){ // If the form was submitted
     validate_input(); // Check for empty fields
     if(count($errors) != 0){ // If there are errors,
      // redisplay the form
         display_form();
     }
     else{ echo "<b>OK! Go ahead and Process the form!</b> <br />"; }
   }
   else{display_form();} // Display the form for the first time

   function validate_input(){
     global $errors;
     if($_POST["name"] == ""){
         $errors['name']="<font color='red'>
          ***Your name?***</font>";
     }
     if($_POST["phone"] == ""){
         $errors['phone']="<font color='red'>
         ***Your phone?***</font>";
     }
   }
   function display_form(){
   global $errors;

?>
  <b>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
   What is your name? <br />
  <input type="text" name="name"
         value="<?php echo $_POST[name]; ?>"> <br />
    <?php echo $errors['name']; ?> <br />
    What is your phone number?<br />
    <input type="text" name="phone"
           value="<?php echo $_POST[phone]; ?>">
  <br />
  <?php echo $errors['phone']; ?>
  <br />
  <input type="reset">
  <input type="submit" name="submit">
<br />
<form>
<?php
 }
?>
</b>
</div>
</body>
</html>
