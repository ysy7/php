<?php
$a=$_POST['snack'];
$price=0;



if($a<10){
    $price=2000*$a;
}else{
    $price=1500*$a;
}

echo"과자의 금액은".$price."입니다. ";
?>