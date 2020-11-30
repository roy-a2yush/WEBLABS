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
			height: 250px;
			width: 250px;
			font-size: 30px;
		}
	</style>
</head>
<body>
	<?php 
		date_default_timezone_set("Asia/Kolkata");
		echo "<center><p><b>";
		echo "Aayush Lal Roy"."<br>"."1CR17CS003"."<br><br>";
		echo "Digital clock: <br>";
		echo date("h : i : sA ");
		echo "</b></p></center>";
	?>
</body>
</html>