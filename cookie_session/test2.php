<?php
//로그인이 안되었을 경우 (cookie가 없음)
if(!isset($_COOKIE['userid']) || !isset($_COOKIE['userpass'])){
    echo "<meta http-equiv='refresh' cotent ='0; url=login.php'>";
}

//로그인이 되었을 경우(cookie가 있음)
//...님 반갑습니다. 
$_userid = $_COOKIE['userid'];
$_userpass = $_COOKIE['userpass'];


echo"<p>".$_userid."님 반갑습니다.</p>";



?>
<a href = "logout.php">로그아웃</a>