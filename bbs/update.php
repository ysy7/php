<?php
//디비접속
include('./db_conn.php');
$idx =$_POST['a'];
//1.진짜 패스워드 출력
//select 쿼리 날려서 조건: $_idx인 애의 값을 가져오기
$query = "select * from bbs where id=$idx";
       //"select password from bbs where id=$idx";
$result = mysqli_query($conn,$query);
$re=mysqli_fetch_row($result);
echo "password".$re[3];
//password가 들어있는 배열 방을 출력

//2.사용자가 입력한 패스워드 출력
echo "사용자입력 password".$password;

if ($re[3]== $password) {
    $query = "update bbs set title ='$title',writer ='$writer',
password='$password',email ='$email', content='$content'
where id=$idx";

mysqli_query($conn,$query);

echo "수정되었습니다";
  
}else{
    echo "<script>alert('비밀번호 오류');history.go(-1);</script>";
}

//name, writer, ...passwrod.. content 값 가져오기 ($_POST)

$title = $_POST['title'];
$writer = $_POST['writer'];
$password = $_POST['password'];
$email = $_POST['email'];
$content = $_POST['content'];

 
echo "idx.".$idx;

$query = "update bbs set title ='$title',writer ='$writer',
password='$password',email ='$email', content='$content'
where id=$idx";

mysqli_query($conn,$query);

echo "수정되었습니다";

?>