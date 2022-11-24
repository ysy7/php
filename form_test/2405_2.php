<?php

$name = $_POST['user_name'];
echo "이름은".$name."입니다";

$num = $_POST['user_num'];
echo "비밀번호는".$num."입니다";

$checkednum = $_POST['user_checkednum'];
echo "비밀번호확인은".$checkednum."입니다";

$id = $_POST['user_id'];
echo "아이디는".$id."입니다";

$email = $_POST['user_email'];
echo "이메일은".$email."입니다";

$self= $_POST['user_self'];
echo "자기소개는".$self."입니다";

for($i=0; $i<count($_POST['gender']); $i++){
    $a=$_POST['gender'][$i];
     echo "선택하신 성별은".$a."<br/>";
 }

 for($i=0; $i<count($_POST['hobby']); $i++){
    $b=$_POST['hobby'][$i];
     echo "선택하신 취미는".$b."<br/>";
 }
?>