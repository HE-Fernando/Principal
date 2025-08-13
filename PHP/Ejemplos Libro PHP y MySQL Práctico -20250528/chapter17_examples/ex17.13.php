<?php
1 class Computer{
2 private $serial_number;
3 final function setSerialNumber($serial_number) {
$this->serial_number=$serial_number;
}
}
4 class Laptop extends Computer {
5 private $new_serial_number;
6 function setSerialNumber() {
7 $this->new_serial_number=$new_serial_number;
}
}
8 $portable->new Laptop();
$portable -> setSerialNumber("abc!@$#");
?>
