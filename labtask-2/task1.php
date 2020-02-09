<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
<?php
 $a = $_POST["Length"];
 $b = $_POST["Width"];
 $Rectangle = $a * $b;
 $Perimeter = 2 * ($a + $b);
 echo "Rectangle is $Rectangle"; 
  echo "Perimeter is $Perimeter";
?>
</body>
</html>
