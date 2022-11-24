<?php

$_userid = $_POST['uid'];
$_userpass = $_POST['upass'];

if($_userid != $a || $_userpass != $b){
    echo"아이디 비밀번호가 잘못되었습니다.";
}else{
    setcookie("userid", "$_id", time()+3600);
    setcookie("userpass","$_pass", time()+3600);

}

?>