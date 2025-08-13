<?php
  session_start();
?>
 <html><head><title>Sessions</title></head>
<body bgcolor="lavender">
<font face='arial' size="+1">
<?php

 if ( ! (empty($_POST['book']) or empty($_POST['user']))){
   // Create short variables
   $book=trim(stripslashes($_POST['book']));
   // Create short variables
   $user=trim(stripslashes($_POST['user']));
 //  session_start();
   if( isset($_SESSION['user'])){
      echo "<H2>Welcome back, $_SESSION[user]!</H2>";
      echo "<H2>You recently visited our $_SESSION[book] store.</h2>";
   }
   else{
      $_SESSION['book']=$book;
      $_SESSION['user']=$user;
      echo "<H2>Welcome, $user!</H2>";
   }
  }
  else{ die ("Form incomplete<br>");
  }
  echo "The session id is: ",session_id(), "<br>";
  echo "You have chosen to enter the <b>$book</b>section.<br>";
  $section=ch16.$book. "_page.php"; // Creating a variable

?>

To browse the <?php echo $book;?> Section:

<a href="<?php echo $section;?>">Click here</a>
<br>
</body>
</html>
