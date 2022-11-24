<?php
$r_title = $_POST['title'];

$r_writer = $_POST['writer'];

$r_password = $_POST['password'];

$r_content = $_POST['content'];

$r_email = $_POST['email'];

$date=date('Y-m-d');


//mysql 접속
include('./db_conn.php');

//쿼리 날리기
$query="insert into bbs (title,writer,password,email,content,regDate) Values('$r_title','$r_writer','$r_password','$r_email','$r_content','$date')";
mysqli_query($conn, $query);
echo "<script>alert('데이터가 추가되었습니다.');</script>";

mysqli_close($conn);


?>