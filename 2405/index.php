<?php
$name = $_POST['uname'];
echo"회사명은 ".$name."입니다.<br/>";

$people = $_POST['upeople'];
echo"참석인원은 ".$people."명 입니다.<br/>";

$gangnam = $_POST['ugangnam'];
echo"회사위치는 ".$gangnam."입니다.<br/>";

$rname = $_POST['urname'];
echo"참석자 대표성함은 ".$rname."님 입니다.<br/>";

for($i=0; $i<count($_POST['pick']); $i++){
    $a=$_POST['pick'][$i];
    echo"채용분야는 ".$a."입니다.<br/>";
}
$boss = $_POST['uboss'];
echo"직책은 ".$boss."입니다.<br/>";

$inone = $_POST['uinone'];
echo"채용예정인원은 ".$inone."명 입니다.<br/>";

$number = $_POST['unumber'];
echo"전화번호는 ".$number."입니다.<br/>";

for($i=0; $i<count($_POST['sel']); $i++){
    $b=$_POST['sel'][$i];
    echo"참석날짜는 ".$b."입니다.<br/>";
}

$email = $_POST['uemail'];
echo"이메일은 ".$email."입니다.<br/>";




?>