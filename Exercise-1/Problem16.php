<?php
//Leap year

function isLeap($year) {
    return (date('L',mktime(0,0,0,1,1,$year))==1);
    
}

for($year=1991; $year<2021; $year++)
{
    IF(isLeap($year))
    {
        echo "$year: Leap Year<br>";
    }
    else
    {
        echo"$year : Not leap year <br>";
    }
}

?>
