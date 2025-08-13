<?php
# PHP5

 class House{
   private $owner;
   public $address;
   function __construct($owner, $address){
      if (! empty($owner) && ! empty($address)){
         $this->owner=$owner;
         $this->address=$address;
         echo "Constructor initializing a new house ";
         echo "in the ", get_class($this)," class.\n";
      }
   }
   function displayHouse(){
     echo "This house is owned by $this->owner. ";
     echo "It's address is $this->address.\n<br>";
   }
   function __destruct(){
     echo "Evacuate now! $this being destroyed\n";
   }
 }
 // Using the class to create objects
  $myHouse= new House("Joe","13 River Road");
  $yourHouse = new House("Brad","1 Roundabout Drive");
  $myHouse->displayHouse();
  $yourHouse->displayHouse();

?>
