<?php
$a=$_POST['date'];

switch ( $a%7 ) {
    case 1:
        echo"월요일입니다";
        break;
    case 2:
        echo"화요일입니다";
        break;
    case 3:
        echo"수요일입니다";
        break;
    case 4:
        echo"목요일입니다";
        break;
    case 5:
        echo"금요일입니다";
        break;
     case 6:
        echo"토요일입니다";
        break;
    case 7:
        echo"일요일입니다";
        break;
                            }
                                
    
?>