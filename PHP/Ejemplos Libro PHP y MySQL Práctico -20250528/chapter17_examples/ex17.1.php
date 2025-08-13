<?php

 # PHP5 Simple class
  class House{ // Declare a class
  public $owner="John"; // Create class variables/properties
  public $address="Anywhere, USA";
  function displayHouse(){
     echo "This house if of type ", gettype($this),".<br>\n";
     echo "It belongs to the ", get_class($this), 
          " class.<br>\n";
     echo "This house is owned by $this->owner. ";
     echo "It's address is $this->address.\n<br>";
  }
 }
  // Using the class
  $myHouse= new House(); // Create an ojbect
  $myHouse->displayHouse();

?>
