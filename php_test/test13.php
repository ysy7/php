<?php
//파일을 읽기모드로 열어서 $fp가 가리키게 한다. 
$filename="./data/data.txt";
//현재 디렉토리 밑에 데이터 폴더 밑에 있는 data.txt를 filename 에 대입해라
$fp = fopen($filename, "r");

// while($c= fgetc($fp)){
//     echo $c."<br/>";
// }

$str=file_get_contents($filename);
echo $str;
fclose($fp);




?>