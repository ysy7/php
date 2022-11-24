<?php
$array=array("apple"=>1000,"banana"=>2000,"melon"=>3000 );
//             key    value  key     value
//일반적인 출력
// echo $array["apple"];
// echo $array["banana"];
// echo $array["melon"];

foreach($array as $key =>$value) {
    echo $key, $value;
}

?>