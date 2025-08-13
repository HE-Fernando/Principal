<?php
 define('ISBN', "0-13-140162-9");
 define('TITLE', "JavaScript by Example" );
 if ( defined(ISBN) and defined(TITLE)){
 print ISBN . "<br>";
 print TITLE . "<br>";
}
 define('TITLE', "PHP by Example"); // Cant change TITLE, and
// cant redefine it.
 print TITLE;
?>
