<?php
include('./db_conn.php');

$a=$_GET['a'];
$query="select * from member_join where id=$a";
$result = mysqli_query($conn, $query);

$re = mysqli_fetch_row($result);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>수정하거라 음하하</h1></br>
    <form method="post" action ="update.php">
    <div class="form-floating mb-3 col-sm-3">
        <label for="exampleFormControlInput1" class="form-label"></label>
        아이디<input type="text" class="form-control" id="exampleFormControlInput1" name ="uid" placeholder="title" value ="<?php echo $re[1]?>">
      </div>
      <div class="form-floating mb-3 col-sm-3">
        <label for="exampleFormControlInput1" class="form-label"></label>
        비밀번호<input type="password" class="form-control" id="exampleFormControlInput1"name ="upassword" placeholder="password" value ="<?php echo $re[2]?>">
      </div>
      <div class="form-floating mb-3 col-sm-3">
        <label for="exampleFormControlInput1" class="form-label"></label>
        이름<input type="text" class="form-control" id="exampleFormControlInput1"name ="uname" placeholder="writer" value ="<?php echo $re[3]?>">
      </div>
      <div class="form-floating mb-3 col-sm-3">
        <label for="exampleFormControlInput1" class="form-label"></label>
        전화번호<input type="text" class="form-control" id="exampleFormControlInput1"name ="utel" placeholder="tel" value ="<?php echo $re[4]?>">
      </div>
      <div class="form-floating mb-3 col-sm-3">
        <label for="exampleFormControlInput1" class="form-label"></label>
        이메일<input type="email" class="form-control" id="exampleFormControlInput1"name ="uemail" placeholder="name@example.com" value ="<?php echo $re[5]?>">
      </div>
      지역 <select name="sel"> 
                <option value="선택 안 함">선택</option>
                <option value="서울">서울</option>
                <option value="인천">인천</option>
                <option value="경기">경기</option>
                <option value="부산">부산</option>
                <option value="대구">대구</option>
                <option value="귤나라">귤나라</option>
            </select></br>
      
      <input type ="hidden" name ="a" value="<?php echo $re[0]?>">


      
      </br><button type="submit" class="btn btn-warning">수정 완료</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>