<?php
	echo "<br>Aayush Lal Roy <br> 1cr17cs003 <br><br>";
	$states="Mississipi Alabama Texas Massachusetts Kansas";
	$statearray=explode(" ",$states);
	echo "<b>Original array</b><br>";
	foreach ($statearray as $key => $value) {
		echo "statesarray[$key]=$value<br>";
	} 

	foreach ($statearray as $key => $value){
		if(preg_match('/.*xas$/',$value))
			$statesList[0]=$value;
	}

	foreach ($statearray as $key => $value){
		if(preg_match('/^k.*s$/i',$value))
			$statesList[1]=$value;
	}

	foreach ($statearray as $key => $value){
		if(preg_match('/^M.*s$/',$value))
			$statesList[2]=$value;
	}

	foreach ($statearray as $key => $value){
		if(preg_match('/.*a$/',$value))
			$statesList[3]=$value;
	}
	echo "<br><b>The resultant array is</b><br>";
	foreach ($statesList as $key => $value){
		echo "statesList[$key]=$value<br>";
	}
?>