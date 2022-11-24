<?php
$idx = $_GET['a'];
echo "id:".$idx;
include('./db_conn.php');
//1. 쿼리 7번 데이터 가져오기 
$query="select * from bbs where id=$idx";
$result = mysqli_query($conn, $query);
//2. 한줄씩 가지고 오기 mysqli_fetch_row(Result)
$re = mysqli_fetch_row($result);
echo $re[0];
echo $re[1];
echo $re[2];
echo $re[3];
echo $re[4];
echo $re[5];
echo $re[6];


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
    <h1>BBS 수정화면</h1>
    <form method="post" action ="update.php">
    <div class="form-floating mb-3 col-sm-3">
        <label for="exampleFormControlInput1" class="form-label"></label>
        Title<input type="text" class="form-control" id="exampleFormControlInput1" name ="title" placeholder="title" value="<?php echo $re[1]?>">
      </div>
      <div class="form-floating mb-3 col-sm-3">
        <label for="exampleFormControlInput1" class="form-label"></label>
        Writer<input type="text" class="form-control" id="exampleFormControlInput1"name ="writer" placeholder="writer"value="<?php echo $re[2]?>">
      </div>
      <div class="form-floating mb-3 col-sm-3">
        <label for="exampleFormControlInput1" class="form-label"></label>
        Password<input type="password" class="form-control" id="exampleFormControlInput1"name ="password" placeholder="password"value="<?php echo $re[3]?>">
      </div>
    
      <div class="form-floating mb-3 col-sm-3">
        <label for="exampleFormControlInput1" class="form-label"></label>
        Email address<input type="email" class="form-control" id="exampleFormControlInput1"name ="email" placeholder="name@example.com"value="<?php echo $re[4]?>">
      </div>
      <div class="form-floating mb-3 col-sm-3">
        <label for="exampleFormControlTextarea1" class="form-label"></label>
        Content<textarea class="form-control" id="exampleFormControlTextarea1"name ="content" rows="3"><?php echo $re[5]?> </textarea>
      </div>
      <input type ="hidden" name ="a" value="<?php echo $re[0]?>">


      
      <button type="submit" class="btn btn-warning">수정 완료</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>