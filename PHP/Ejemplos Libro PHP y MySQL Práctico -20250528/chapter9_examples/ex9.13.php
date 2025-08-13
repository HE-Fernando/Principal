<?php

  $friend = "Sam"; // Global variable, visible outside functions

  function who(){
     $friend = "Joe"; // Local variable; dies when function ends
     print "In the function $friend is your local friend.<br>";
  }

  who(); // Function call
  print "Out of the function, your friend is $friend.<br.>";

?>
