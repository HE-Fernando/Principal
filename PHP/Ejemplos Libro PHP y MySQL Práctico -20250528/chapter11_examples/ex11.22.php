<html><head><title>Copy a File</title></head>
<body bgcolor="lavender">
<?php

 $oldfilename="datebook";
 $newfilename="datebook.bck";
 if(! copy($oldfilename, $newfilename)){
    echo "Copy failed\n<br>";
    exit();
 }
 else { echo "Copy succeeded!\n<br>";}

?>
</body>
</html>
