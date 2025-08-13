<?php
  class Computer{
    private $password; // Is visible in this class
    protected $userId; // Is visible in this class and subclass
    public $printer; // Is visible everywhere in the script
    function __construct(){
       echo "Parent constructor just called.\n<br>";
       $this->userId="willie";
       $this->password="UrOKhi5";
    }
  }
  // Extend the computer class

  class Laptop extends Computer{ // Child/derived/subclass
    public $brand;
    public $weight;
    private $password="LetMeIn2";
    function __construct($brand,$weight){ // Subclass constructor
      parent::__construct(); // Call to parent constructor
      echo "Child constructor just called.\n<br>";
      $this->brand=$brand; // New properties for the child
      $this->weight=$weight;
    }
 }

  // User of the class
  $pc=new Computer();
  $portable = new Laptop("Sonie","3.5");
  $pc->printer="LazerBeam"; //direct access ok
  $portable->printer="Daisy";
  // echo "$portable->password<br>"; // Fatal error
  // echo "$pc->password<br>"; // Fatal error
  echo "<pre>";
  // Get publically available properties
  print_r(get_object_vars($pc));
  print_r(get_object_vars($portable));
  echo "</pre>";

?>
