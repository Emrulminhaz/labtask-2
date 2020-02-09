<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
<?php
 $a = $_POST["Amount"];
 $b = $_POST["VAT"];
 $vat = $a * $b/100 ;
 $Total = $a + $vat;

 echo "Total Amount is $Total"; 
 
?>
</body>
</html>
