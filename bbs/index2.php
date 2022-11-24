<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            margin:20px;
        }
        a:link{
            text-decoration: none; color:#333
        }
        a:visited{
            text-decoration: none; color:#333
        }
        a:hover{
            text-decoration: none; color:#333
        }
        
    </style>

    <title>Hello, world!</title>
  </head>
  <h3>BBS(bullentin board system)</h3>
  <table  class="table table-hover">
    <tr><td calspan="2">번호</td><td>제목</td><td>작성자</td><td>이메일</td><td>내용</td><td>작성일</td></tr>
    <?php
//목록 가져오기

//1. 디비접속
include('./db_conn.php');

//2. 모든 데이터 가져오는 쿼리 날리기

$query = "select * from bbs order by id ";//오름차순
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);

//$re: 1차원 배열로 들어감
//데이터 갯수 구하기 $count
for($i=0; $i<$count; $i++){
    //한줄씩 가져오기
    $re = mysqli_fetch_row($result);
    echo "<tr><td>$re[0]</td><td>$re[1]</td><td>$re[2]</td><td>$re[4]</td><td>$re[5]</td><td>$re[6]</td></tr>";//바꿔

}

//3. 디비 접속 종료
mysqli_close($conn);


?>
</table>
<div style = "margin-left:700px">
<a href = "write.html" class="btn btn-outline-danger">Write</a>
</div>
