<?php
$b = $_GET['b'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>delete</title>
</head>

<body>
<h1>삭제 페이지</h1>
  <form method="post" action ="delete.php">
  <div class="form-floating mb-3 col-sm-3">
      <label for="exampleFormControlInput1" class="form-label"></label>
      비밀번호를 입력하세요</br><input type="text" class="form-control" id="exampleFormControlInput1" name ="password" placeholder="">
    </div>
    <input type ="hidden" name ="a" value="<?php echo $b ?>">
      <button type="submit" class="btn btn-warning">입력 완료</button>
    </form>

    
</body>
</html>