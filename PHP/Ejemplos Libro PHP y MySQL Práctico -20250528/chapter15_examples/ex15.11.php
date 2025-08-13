<?php

extract($_REQUEST);

if ( isset($subject) && isset($body) ) {
 mysql_connect("localhost","root");
 mysql_select_db( "test" );

  mysql_query( "INSERT INTO messages (subject, body) ".
   "VALUES ('$subject', '$body' )" );
   $status = "Message <i>$subject</i> has been posted<br><br>";
}

?>
<html><head><title>message</title></head>
<body>

<h1>Post a Message</h1>

<strong><?php echo $status ?></strong>

<form action="<?php echo $_SERVER['SELF'] ?>">

Subject	<input type="text" 
          name="subject" 
          size="35">
           <br><br>
	 <textarea name="body" cols="40" rows="15">
          </textarea>

<br><br>
<input type="submit" value="Post">
</form>

</body>
</html>
