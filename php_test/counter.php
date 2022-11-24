<style>
    span {
        color:red;
        font-size:2em;
    }
    </style>
<?php
//방문자 수를 나타내는 코드 



//1.count.txt를 filename에 대입
$filename="count.txt";

//2. *모드로 file을 열어서 fp가 가리키게 한다. 
$fp = fopen($filename, "r");

//3. 한 문자 읽어온다
 $num= fgets($fp);  //$num: string
    
//4. 문자를 숫자로 바꾼다((*int))
$count = (int)$num;  //문자를 숫자로 바꾸는 함수 $count : int

//5. 1을 더한다. 
$count = $count+1;
fclose($fp);

//6. w모드로 연다.
$fp = fopen($filename, "w");

//7. 파일쓰기한다. 
fwrite($fp,$count);
//8. 파일 닫는다. 
fclose($fp);

?>


<h1>당신은 <span><?php echo $count?></span>번째 방문자입니다. 왕신기TV</h1>



