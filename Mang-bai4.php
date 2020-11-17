<?php
$a=array(10,-2,8,9,25);
$b=array(1,8,9,9,13,18,34);
$c=array_merge($a,$b);

 echo "Mảng trộn đã sắp xếp là <br>";
 sort($c);
 For($i=0;$i<count($c);$i++)
 {
 	$pt=each($c);
 	echo "$pt[key]:$pt[value] <br>";

 }
 echo 'Phần tử nhỏ nhất là: '.$c[0];



?>