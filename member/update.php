<?php
include('./db_conn.php');
$idx = $_POST['a'];
echo $idx."번"."</br>";
$query = "select * from member_join where id = $idx";
$result = mysqli_query($conn, $query);
$re = mysqli_fetch_row($result);
echo "기존 password : ".$re[2]."</br>";


echo "사용자가 입력한 password : ".$password."</br>";

$uid = $_POST['uid'];
$uname = $_POST['uname'];
$upassword = $_POST['upassword'];
$utel = $_POST['utel'];
$uemail = $_POST['uemail'];
$ucity = $_POST['sel'];

if ($re[2]==$password){
    $query = "update member_join set uid='$uid', uname='$uname', utel='$utel',
    uemail='$uemail',ucity ='$ucity'
    where id = $idx";

    mysqli_query($conn, $query);

    echo "수정되었습니다";
}else{
    echo "<script>alert('비밀번호 오류');history.go(-1);</script>";

}




?>