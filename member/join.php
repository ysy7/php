<?php
include('./db_conn.php');

$_uid = $_POST['uid'];
$_upass = $_POST['upassword'];
$_uname = $_POST['uname'];
$_utel = $_POST['utel'];
$_uemail = $_POST['uemail'];
$_usel = $_POST['sel'];
echo "id: ".$_uid."</br>password: ".$_upass."
</br>name: ".$_uname."</br>tel: ".$_utel."
</br>email: ".$_uemail."</br>city: ".$_usel."</br>";

$query = "insert into member_join(uid, upassword, uname, utel, uemail, ucity)Values('$_uid','$_upass','$_uname','$_utel','$_uemail','$_usel')";
mysqli_query($conn, $query);
echo "<script>alert('가입되었습니다.');</script>";

?>
<meta http-equiv="refresh" content ="0; url = http://localhost/member/join.html">



