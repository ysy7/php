<?php
$u_name="kim";
$u_num="3333";

$name=$_POST['user_name'];
$num=$_POST['user_num'];
// echo "이름은".$name."입니다"; 
// echo "학번은".$num."입니다";

// 사용자가 입력한 값이 kim, 3333이면 '회원정보가 맞습니다' 출력
// 둘 중에 한가 틀리면 '회원정보가 맞ㅈ지 않습니다.' 출력
// 둘 다 틀리면 '회원이 아닙니다.' 출력


// if(조건) {
//     조건이 참일때 문장;
// }
// else if(조건) {
//     조건이 ㅊ참일때 문장;
// }
// else {
//     문장
// }
if (($u_name==$name)&& ($u_num==$num)) {
    
    echo "회원정보가 맞습니다.";

}else if (($u_name!=$name)|| ($u_num!=$num)){

    echo "회원정보가 맞지 않습니다.";

}else{
    
    echo "회원이 아닙니다.";
}


?>