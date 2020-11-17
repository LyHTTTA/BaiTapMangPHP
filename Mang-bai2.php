<?php
$mang1=array(9,8,-25,67,45);
$mang2=array(9,8,6,25,78,-20,11);
$mangtron=array_merge($mang1,$mang2);
var_dump($mang1); echo"<br>";
var_dump($mang2);echo"<br>";
var_dump($mangtron);echo"<br>";
sort($mangtron);
echo "Mang sap xem tang dang dan la:<br>";
for ($i=0; $i <count($mangtron) ; $i++) 
{ 
  	$pt=each($mangtron);
 	echo "$pt[key] : $pt[value]<br>";
}
?>