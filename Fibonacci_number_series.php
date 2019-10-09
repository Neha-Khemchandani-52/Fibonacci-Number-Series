<?php
/***
 ** Description : Priniting Fibonacci Number Series 
 ** Date Added : 9th October,2019
 ** Added By : Neha Khemchandani
 ***/

 // 0 1 1 2 3 5 8 13 21 34 55 89

 $num1 = 0;
 $num2 = 1;
 $number = 1;

 echo $num1." ".$num2." ";
 while($number<=10)
 {
     $num3 = $num1+$num2;
     echo $num3." ";
     $num1=$num2;
     $num2=$num3;
     $number++;
    

 }

?>