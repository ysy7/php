<?php
//1. mysql 접속
//.: 현재 디렉토리
$host = 'localhost';
$id = 'test';
$pw = '1111';
$db = 'testdb';

//include('./db_conn.php');
$conn = mysqli_connect($host,$id,$pw,$db);

if($conn){
    echo "connected!!";
}else{
    echo "failed!!";
}

//2. 원하는 작업하기(쿼리 날리기)
// mysqli_query($conn,"insert into book values(5,'인문학','조래정',4,'오계절')");

$query = "update book set title ='aaa' where id=5";
mysqli_query($conn,$query);
echo "수정되었습니다.";


//3. mysql 종료
mysqli_close($conn);




?>