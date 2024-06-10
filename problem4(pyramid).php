<?php
/*function pyramid($given_number)
{
    if($given_number<0)
    {
        $given_number = -1 * $given_number;
    }
    for($i=1; $i<=$given_number; $i++)
    {
        for ($j=1; $j<=$given_number-$i; $j++)
              {
                  echo " ";
              }
        for($k=1; $k<=$i;$k++)
             {
                 echo $k;
             }
        for($a=$i-1; $a>=1;$a--)
        {  
            echo $a;
    }
    echo "\n";
    }
    
}*/

function pyramid($given_number)
{
    if($given_number<0)
    {
        $given_number = -1 * $given_number;
    }
    for($i=1; $i<=$given_number; $i++)
    {
        for ($j=1; $j<=$given_number-$i; $j++)
              {
                  echo " ";
              }
        for($k=1; $k<=$i;$k++)
             {
                 echo "*";
             }
        for($a=$i-1; $a>=1;$a--)
        {  
            echo "*";
    }
    echo "\n";
    }
    
}
echo pyramid(readline("Enter the length of Pyramid: "));
?>