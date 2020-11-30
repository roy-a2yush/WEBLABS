<?php
	$a=array(array(1,2,3),array(4,5,6),array(7,8,9));
	$b=array(array(3,2,1),array(6,5,4),array(9,8,7));
	$m=count($a);
	$n=count($a[0]);
	$p=count($b);
	$q=count($b[0]);
	echo "<br>Matrix a is:<br>";
	for ($r=0; $r < $m; $r++) { 
		for ($i=0; $i < $n; $i++) { 
			echo " ".$a[$r][$i];
		}
		echo "<br>";
	}

	echo "<br>Matrix b is:<br>";
	for ($r=0; $r < $p; $r++) { 
		for ($i=0; $i < $q; $i++) { 
			echo " ".$b[$r][$i];
		}
		echo "<br>";
	}

	echo "<br>Transpose matrix a is:<br>";
	for ($r=0; $r < $m; $r++) { 
		for ($i=0; $i < $n; $i++) { 
			echo " ".$a[$i][$r];
		}
		echo "<br>";
	}

	echo "<br>Transpose matrix b is:<br>";
	for ($r=0; $r < $p; $r++) { 
		for ($i=0; $i < $q; $i++) { 
			echo " ".$b[$i][$r];
		}
		echo "<br>";
	}
	echo "<br>Addition of two matrix:<br>";
	if($m==$p && $n==$q){
		for ($r=0; $r < $m; $r++) { 
			for ($i=0; $i < $q; $i++) { 
				echo $a[$r][$i]+$b[$r][$i]." ";
			}
			echo "<br>";
		}
	}

	echo "<br>Multiplication of a and b<br>";
	if($n==$p){
		$result=array();
		for ($r=0; $r < $m; $r++) { 
			for ($i=0; $i < $q; $i++) { 
				$result[$r][$i]=0;
				for($k=0;$k<$n;$k++){
					$result[$r][$i]+=$a[$r][$k]*$b[$k][$i];
				}
			}
		}

		for ($r=0; $r < $m; $r++) { 
			for ($i=0; $i < $q; $i++) { 
				echo $result[$r][$i]." ";
			}
			echo "<br>";
		}
	}
?>