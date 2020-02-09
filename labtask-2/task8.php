<?php
echo "The ARRAY: <br>" ;
echo "<br>" ;


$Array = array
  (
  array(1,2,3,"A"),
  array(1,2,"B","C"),
  array(1,"D","E","F"),

  );
echo "----------<br>";  
echo "|".$Array[0][0]."|".$Array[0][1]."|".$Array[0][2]."|".$Array[0][3]."|"."<br>";
echo "----------<br>";
echo "|".$Array[1][0]."|".$Array[1][1]."|".$Array[1][2]."|".$Array[1][3]."|"."<br>";
echo "----------<br>";
echo "|".$Array[2][0]."|".$Array[2][1]."|".$Array[2][2]."|".$Array[2][3]."|"."<br>";
echo "----------<br>";

echo "Print Shape Number 1 : ";
	  echo "<br>";

	
	 for($i=3  ; $i>0 ; $i--)
	 {
		 for($j=1 ; $j<=$i ; $j++)
		 {
			 echo $j;
		 }
		 echo "<br>";
	 }
	 
	 echo "Print Shape Number 2 : ";
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