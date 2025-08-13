<?php
// The class
 class Employee {
    public $name; // Properties
    public $address;
    public $phone;
   // Public magic methods
    function __set($property,$value) // setter
    {
     $this->property = $value;
    }
    function __get($property) // getter
    {
      return $this->property;
    }
  };
 // User of the class
  $Heidi = new Employee();
  $Heidi->name="Heidi Clum";
  echo $Heidi->name, "\n<br>";
  $Heidi->address="1234 Somewhere Blvd ";
  echo $Heidi->address, "\n<br>";
  $Heidi->phone="123-456-7890";
  echo $Heidi->phone,"\n<br>";
  echo "<hr>";
  $Brad = new Employee();
  $Brad->name="Brad Bit";
  echo $Brad->name, "\n<br>";
  $Brad->address="4321 Sunset Blvd ";
  echo $Brad->address, "\n<br>";
  $Brad->phone="987-654-3210";
  echo $Brad->phone, "\n<br>";
?>
?>
