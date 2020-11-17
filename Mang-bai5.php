<?php
$mang1=array("Trang","Hoang","Minh","Ly","Phương Anh","Tâm");

 echo "Mảng chữ hoa đã sắp xếp là <br>";
 sort($mang1);
 For($i=0;$i<count($mang1);$i++)
 {
 	$pt=each($mang1);
 	echo "$pt[key]:".strtoupper("$pt[value]")." <br>";

 }
 echo "chuỗi ngắn nhất là:<br>";
 $min=strlen($mang1[0]);
 echo $min;



?>