<?php
$a=array("ab"=>"Ha Noi","ac"=>"Thai Binh","aa"=>"Thanh Hoa");
for ($i=0; $i <count($a) ; $i++) 
{ 
	$pt=each($a);
	echo "$pt[key]: $pt[value]<br>";
}
echo "SẮP XẾP LIÊN HỢP<br>";
	echo "1. Sắp xếp tăng dần theo Value<br>";  
		 asort($a);  
		foreach($a as $y=>$y_value)  
		{  
		  echo "".$y." là: ".$y_value."<br>";  
		}  
		
		echo "2. Sắp xếp tăng dần theo Key<br>";  
		ksort($a);  
		foreach($a as $y=>$y_value)  
		{  
		  echo "".$y." là: ".$y_value."<br>";  
		}  
		
		echo "3. Sắp xếp giảm dần theo Value<br>";  
		  
		arsort($a);  
		foreach($a as $y=>$y_value)  
		{  
		  echo "".$y." là: ".$y_value."<br>";  
		}  
		
		echo "4. Sắp xếp giảm dần theo Key<br>";  
		krsort($a);  
		foreach($a as $y=>$y_value)  
		{  
		  echo "".$y." là: ".$y_value."<br>";  
		}

 $b=array(array_flip($a));
foreach($b as $y=>$y_value)  
		{  
		  echo "".$y." là: ".$y_value."<br>";  
		}




?>