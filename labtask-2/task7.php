<?php
  
	  echo "Print Shape Number 1 : ";
	  echo "<br>";
	  
	 for($i=0 ; $i<3 ; $i++)
	 {
		 for($j=0 ; $j<=$i ; $j++)
		 {
			 echo"*";
		 }
		 echo "<br>";
	 }

	  echo "Print Shape Number 2 : ";
	  echo "<br>";

	
	 for($i=3  ; $i>0 ; $i--)
	 {
		 for($j=1 ; $j<=$i ; $j++)
		 {
			 echo $j;
		 }
		 echo "<br>";
	 }
	 
	 echo "Print Shape Number 3 : ";
	 echo "<br>";
	 
	 $x=0;

	 for($i=0 ; $i<3 ; $i++)
	 {
		 for($j=0 ; $j<=$i ; $j++)
		 {
			 
			 echo (chr(65+$x)); //A=65
			 $x+=1;
		 }
		 echo "<br>";
	 }
	 
	 
 

?>
