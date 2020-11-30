<!DOCTYPE html>
<html>
<head>
	<title>Digital clock</title>
	<meta http-equiv="Refresh" content="1" />
	<style >
		*{
			background-color: whitesmoke;
		}
		p{
			border: 5px solid black;
			margin: 100px 500px 500px 500px;
			padding: 80px;
			padding-top: 120px; 
			background-color: #ebcfc4;
			box-shadow: 20px black;
			border-radius: 500px;
			height: 300px;
			width: 300px;
			font-size: 22px;
		}
	</style>
</head>
<body>
	<?php 
		date_default_timezone_set("Asia/Kolkata");
		echo "<center><p><b>";
		echo "Aayush Lal Roy"."<br>"."1CR17CS003"."<br><br>";
		echo date("d / m / Y")."<br>";
		echo date("d - m - Y")."<br>";
		echo date("d . m . Y")."<br><br>";
		echo date("h : i : s ")."<br>";
		echo date("M , d , Y ");
		echo date("h , i , s A")."<br>";
		echo date("h : i A");
		echo "</b></p></center>";
	?>
</body>
</html>