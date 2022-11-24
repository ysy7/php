<?php
$str1="Hello PHP";
$str2="Hello php";
if(strcmp($str1,$str2)==0){
    echo "같다";

}else{
    echo "다르다";
}


?>

<!--substr(문자열, 시작위치, [추출길이])-->
<?php
$str="hello php welcome";
$sub=substr($str,5,5);//php 
echo "추출한 문자는".$sub;
?>
<!--strtolower(문자열) 소문자로-->
<?php
$str="Marry Had A Little Lamb and She LOVED It So";
//소문자로 출력

echo "출력: ".strtolower($str);
echo "<br>";
?>


<!--strtoupper(문자열) 대문자로-->
<?php
$str="Marry Had A Little Lamb and She LOVED It So";
echo "출력: ".strtoupper($str);

?>


<!--explode(구분자,문자열): 문자열을 배열로 만들어 주는 것-->
<?php
$str="pizza1 pizza2 pizza3 pizza4 pizza5";
$arr=explode(" ", $str);
echo $arr[0];
echo $arr[1];
echo $arr[2];
echo $arr[3];
echo $arr[4];

?>

<?php
$str="one|twe|three|four|five|";
$arr=explode(" ", $str);

foreach($str as $key =>$value) {
    echo arr;
}


?>



<!--implode(구분자, 배열): 배열을 문자열로 바꿈-->
<?php
$array=array("lastname","email","phone");
//implode함수를 써서 문자열 출력
$str=implode("/",$array);
echo "<br>";
echo "implode 실행결과 후 ".$str;


?>
<!--str+replace(원본문자열, 변경완료될 문자, 대상 문자열)-->
<?php

$txt="you should stud";
$result="str_replace("should","could".$txt)'
echo "변경전 문자열:".$txt."<br/>";
echo "변경후 문자열:".$result."<br/>";




?>