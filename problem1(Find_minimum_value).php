

<?php
 echo "Enter a list of integer:";
 
function minimum_value($arr)
{
	for($j=1; $j<count($arr); $j++)
		{
            if($arr[$j]<0)
            $arr[$j] = -1 * $arr[$j];
		}
        $minimum_value = $arr[0];
	  
	  	for($i=1; $i<count($arr); $i++)
	{
		if($minimum_value > $arr[$i])
		
		 { 
		 	$minimum_value = $arr[$i];
		 	
		 }
	}
	if($minimum_value<0)
        {
		return -1 * $minimum_value;
	}
	else
	{
		return  $minimum_value;

	}

}
echo "Minimum value is : " .minimum_value($arr = explode(' ', readline()));
?>
