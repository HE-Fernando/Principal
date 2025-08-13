<?php

  # PHP5
  class House{
    private $owner;
    public $address;
    function __construct($owner, $address){
      if (! empty($owner)&& ! empty($address)){
         $this->owner=$owner;
         $this->address=$address;
         print "Constructor initializing a new house.\n";
      }
    }
    function displayHouse(){
      echo "This house is owned by $this->owner. ";
      echo "It's address is $this->address.\n<br>";
    }
  }

// Using the class to create objects
   $myHouse= new House("Joe","13 River Road");
   $yourHouse = new House("Brad","1 Roundabout Drive");
   $myHouse->displayHouse();
   $yourHouse->displayHouse();

?>
