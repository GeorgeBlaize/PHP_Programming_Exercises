<?php

//Reversing String

$string= "Learning Tools";

$length=strlen($string);

for($i=($length-1); $i>=0; $i--)
{
    echo $string[$i];
}

?>
