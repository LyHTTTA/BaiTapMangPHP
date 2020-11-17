<?php
$a = array('2' =>1 ,'3'=>2,'4'=>3,'5'=>4,'6'=>5,'7'=>6,'8'=>9,'9'=>8,'10'=>11,'11'=>10);
$sopht=count($a);
echo "Mảng a là:<br>";
for ($i=0; $i <$sopht ; $i++) { 
 	$pt=each($a);
 	echo "$pt[key] : $pt[value]<br>";
}


function tong($a)
{
	$tong=0;
	for($i=0;$i<count($a);$i++)
	{ 
		
		$tong+=$a[$i];
	}
	return $tong;

}
echo "Tổng của của mảng là ".tong($a); echo "<br>";
echo "Tổng của của mảng là ".array_sum($a); echo "<br>";
echo "Các số lẻ là:".sole($a); echo"<br>";
echo "Các số chắn là:".sochan($a); echo"<br>";

function sole($a)
{
	for ($i=0; $i < count($a) ; $i++)
	{
	 if($a[$i]%2==1)
	 {
	 	echo "".$a[$i];
	 }
		
	}
}
function sochan($a)
{
	for ($i=0; $i < count($a) ; $i++)
	{ 
		if($a[$i]%2==0)
		{
			echo "".$a[$i];
		}
	}
}

rsort($a);
for ($i=0; $i <count($a) ; $i++) 
{ 
  	$pt=each($a);
 	echo "$pt[key] : $pt[value]<br>";
}


?>