<html>
<head><title>Checking for Existence of an Array or Element
</title></head>
<body bgcolor="lightblue">
<h3>Does it Exist?</h3>
<pre>
<?php

  $country="USA";
  $states=array('CA'=>"California",
                'MT'=>"Montana",
                'VA'=>"Virginia"
               );
  if ( is_array($country)){
      print '$country is an array'."<br>";
  }
  else{
      print '$country is not an array'."<br>";
  }
  if (array_key_exists("VA", $states)){
     print 'Array key "VA" exists'."<br>";
  }
  if (in_array("Montana", $states)){
     print 'Array value "Montana" exists'."<br>";
  }

?>
<pre>
</body>
</html>
