<?php
		$ARRAY=array(1,2,3,4,5,100,500,35,40,55);
	
			$x = $_POST["number"];
			for($i=0 ; $i<count($ARRAY) ; $i++)
			{
				if($x == $ARRAY[$i])
				{
					echo "Hurray! ";
					echo $x." was found at index : ".$i."<br>";
					$x=-1;
					break;
				}
				
			}
			if($x!=-1)
			{
					echo "Alas! ";
					echo  $x." was not in the array <br>";
			}
		
	?>