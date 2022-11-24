<!-- <?php
//파일 쓰기 fwrite
$filename= "data2.txt";
$str = "cannot find file";

$fp = fopen($filename, "w");
// 1. 파일을 여는데 모드도 체크

fwrite($fp, $str);
// 2. 파일을 쓴다. 

fclose($fp);
// 3. 파일을 닫는다. 

echo"저장되었습니다.";


?> -->

<?php
$filename="write.txt";
$str="marry had a dog";

file_put_contents($filename, $str);
echo "저장되었습니다. saved"

?>