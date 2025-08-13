<?php
  class Employee { // Define the class
    public $name; // The properties/attributes
    public $address;
    public $phone;
    function printPersonInfo(){ // The methods
      echo "<hr><b>Employee Info</b><br>";
      echo $this->name . "<br>\n";
      echo $this->address . "<br>\n";
      echo $this->phone . "<br>\n";
    }
   }
  // User of the class
   $Heidi = new Employee(); // Create a new object
   $Heidi->name = "Heidi Clum"; // Assign properties
   $Heidi->address = "1234 Somewhere Blvd ";
   $Heidi->phone = "123-456-7890";
   $Brad = new Employee(); // Create another object
   $Brad->name = "Brad Bit";
   $Brad->address = "4321 Sunset Blvd ";
   $Brad->phone = "987-654-3210";
   $Heidi->printPersonInfo(); // Access the object with the method
   $Brad->printPersonInfo();

?>
