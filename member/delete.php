<?php
include('./db_conn.php');
$_id = $_POST['a'];
echo "아이디: ".$_id."번"."</br>";
$_pass = $_POST['password'];
echo "진짜 비밀번호: ".$_pass."</br>";



$query ="select * from member_join where id = $_id";
$result = mysqli_query($conn,$query);  
$re=mysqli_fetch_row($result); 

echo "입력한 비밀번호: ".$re[2]."</br>";
if($re[2] === $_pass ){
    $query="delete from member_join where id = $_id";
    mysqli_query($conn,$query);
    echo "너굴맨이 삭제했다구";
}else{
    echo"<script>alert('비밀번호 오류');history.go(-1);</script>";
}

?>
<meta http-equiv="refresh" content="0; url=http://localhost/member">