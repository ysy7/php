<?php

//리턴타입X 매개변수X
function add(){
   echo(10+20+30);
}
add();

//리턴타입X 매개변수O
function add2($x, $y, $z){
   echo($x + $y + $z);
}
add2(10, 20, 30);

//리턴타입O 매개변수X
function add3(){
   return 10 + 20 + 30;
}
$result = add3();
echo $result;

//리턴타입O 매개변수O
function add4($x, $y, $z){
   return ($x + $y + $z);
}
$result = add4(10, 20, 30);
echo $result;
?>