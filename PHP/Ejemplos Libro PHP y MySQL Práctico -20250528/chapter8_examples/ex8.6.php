<html>
<head><title>Array of Books</title></head>
<body bgcolor="lightblue">
<?php

  $book=array('Title' => 'War and Peace',
              'Author' => 'Tolstoy',
              'Publisher' => "Oxford University Press"
              );
  $book['ISBN'] = "0192833987"; // Add a new element
  echo "<b>\$book is $book.<br>";
  echo "\$book['Title'] ". $book['Title'] .".<br>";
  echo "\$book['Author'] is ". $book['Author'] .".<br>";
  echo "\$book['Publisher'] is ". $book['Publisher'] .".<br>";
  echo "\$book['Pages'] is ". $book['ISBN'] .".<br>";

?>
</body>
</html>
