<?php
include('./db_conn.php');
$_pass = $_POST['password'];
echo "진짜 비밀번호: ".$_pass."</br>";
$_id = $_POST['a'];
echo "아이디: ".$_id."</br>";

//2. 진짜 비밀번호 가지고 옴 -- select
$query ="select * from bbs where id =7";
$result = mysqli_query($conn,$query);  //$result: 2차원 배열
$re=mysqli_fetch_row($result);  //한줄씩 가지고 오기

//진짜 비밀번호 출력
echo "입력한 비밀번호: ".$re[3];
if($re[3] === $_pass ){
    $query="delete from bbs where id = $_id";
    mysqli_query($conn,$query);
    echo "삭제되었더용.";
}else{
    //echo "<script>alert('비밀번호 오류');history.go(-1);</script>";
}

?>
<meta http-equiv="refresh" content="0; url=http://localhost/bbs">