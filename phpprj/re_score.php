<?php
$a=$_POST['uname'];
$a1=$_POST['Korean'];
$a2=$_POST['English'];
$a3=$_POST['math'];

$num=0;
$sum=$num+$a1+$a2+$a3;

$avg = $sum/3;


echo "이름:".$a." <br/>";
echo "국어:".$a1." <br/>";
echo "영어:".$a2." <br/>";
echo "수학:".$a3." <br/>";
echo "총점:".$sum." <br/>";
echo "평균:".$avg." <br/>";




?>