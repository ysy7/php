<?php

$a=$_POST['multi'];

$result =0;

for($i = 1; $i<= 9; $i++){
    $result=$a*$i;
    echo $a."*".$i."=".$result."<br/>";
    
}




?>