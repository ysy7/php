<!-- 1.strlen()글자길이 -->
<!-- <?php
$str="PHP is a popular language";
echo "글자길이:".strlen($str)

?> -->

<!--strpos(전체 문자열, 찾을 문자열)
<?php
$str="abcdefghijklmn";
$findme="e";
echo "findme의 위치:".strpos($str, $findme); 

?> -->

//strcmp(문자열, 문자열) 같으면 0, 다르면 1
<?php
$str1="Hello PHP";
$str2="Hello php";
if(strcmp($str1,$str2)==0){
    echo "같다";

}else{
    echo "다르다";
}


?>
