<?php
	$file="visit.txt";
	$count=strval(file_get_contents($file));
	$count=(int) $count;
	file_put_contents($file,$count+1);
	echo "You are visitor no: <b style=color:green>".$count."</b>";
?>