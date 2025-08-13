<html><head><title>Counting Elements in a Multidimensional Array
</title>
</head>
<body bgcolor="blue">
<div align="center">
<table border="2">
<tr><td bgcolor="cornflowerblue">
<img src="cosmos.jpg" align="right"><br />
<?php
   $plants= array('perennials' => array('Day Lilies',
                                          'Coral Bells',
					  'Goldenrod',
					  'Russian Sage'),
		    'annuals' => array('Begonia',
			   	       'Sweet Alyssum',
			               'Cosmos',
				       'Helioptrope')
                   ) ;
  // Recursive count
  echo "The number of elements: ",
  count($plants, COUNT_RECURSIVE), "\n<br />"; // output 10
  echo "The number of arrays: ", count($plants), "\n<br />"; // output 2

?>
</td></tr>
</table>
</body>
</html>
