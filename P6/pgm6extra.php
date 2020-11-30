<?php
	$file="pgm6.txt";
	$count=strval(file_get_contents($file));
	$rev=strrev($count);
	$len=strlen($count);
	file_put_contents($file,$rev);
	echo "String reversed:$rev"."<br>";
	echo "String length:$len";
?>