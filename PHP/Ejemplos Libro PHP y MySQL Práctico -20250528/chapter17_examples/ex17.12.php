i<html><head><title>Private, Protected, Public</title>
</head>
<body bgcolor="lavender">
<font face="ariel" size=+1>
<h1>Private, Protected, Public</h1>
<?php
1 class computer {
2 private $password; // Visible only within this class
3 protected $userId; // Visible within this class and subclass
4 public $printer; // Visible anywhere in the script
5 function __construct() { // Parents constructor
print "In the parent constructor.\n<br>";
$this->userId = "willie"; // protected
$this->password = "urAok5"; // private
}function setUserId($userId){
$this->userId=$userId;
}
7 function getUserId() {
return $this->userId;
}
8 private function setPassword($password){ // private method
$this->password=$password;
}
9 private function getPassword(){
return $this->password;
}
}
10 class Laptop extends Computer{
11 public $model;
public $weight;
12 private $password;
13 function __construct() { // Laptop's constructor
echo "In the child's constructor\n<br>";
14 parent::__construct();
// Inherited
15 echo "Inherited user name? ". $this->userId, "\n<br>";
// Not inherited
echo "Inherited password? ". $this->password, "\n<br>";
16 $this->brand=$brand;
$this->weight=$weight;
}
17 function setPassword($password){
$this->password=$password;
}
18 function getPassword(){
return $this->password;
}
}
// Class user
19 $pc=new Computer(); // Create two new objects
20 $portable = new Laptop();
21 $portable->setPassword("letmein2");
22 $pc->printer="Lazerboy"; // Direct access okay
$portable->printer="Daisy";
// echo $pc->userId; // Error: Cant access directly
23 echo "<br>My Laptop username is ", $portable->getUserId(),
"\n<br>";24 echo "My pc username is ", $pc->getUserId(), "\n<br>";
// echo "My pc password is ", $pc->getPassword(), "\n<br>";
25 echo "My Laptop password is ", $portable->getPassword(),
"<br>";
26 echo "My pc printer is ", $pc->printer, "\n<br>";
echo "My Laptop printer is ", $portable->printer, "<br>";
?>
</body>
</font>
</html>

