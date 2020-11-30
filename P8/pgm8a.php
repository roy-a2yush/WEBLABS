<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<link rel="icon" href="roy.a2yush.png" type="image/gif" sizes="16x16">
	<style type="text/css">
		.center {
			margin-top: 10%;
			text-align: center;
		}
		body {
			overflow: hidden;
			background-color: #fff3e2;
		}
	</style>
</head>
<body>
	<div class="center">
		<p><strong>Name: </strong>Aayush Lal Roy</p>
		<p><strong>USN: </strong>1CR17CS003</p>
		<br>
	
		<form method="POST">
		<table border="4">
			<caption>CALCULATOR</caption>
			<tr>
				<th>Value 1:</th>
				<td><input type="text" name="a"></td>
			</tr>
			<tr>
				<th>Value 2:</th>
				<td><input type="text" name="b"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="cal" value="CALCULATE"></td>
			</tr>
		
		</form>
		<?php
		if(isset($_POST['cal'])){
			$a=$_POST['a'];
			$b=$_POST['b'];
			if(is_numeric($a) && is_numeric($b)){
				echo "<tr><th>Addition: </th><td>".($a+$b)."</td></tr>";
				echo "<tr><th>Substraction: </th><td>".($a-$b)."</td></tr>";
				echo "<tr><th>Multiplication: </th><td>".($a*$b)."</td></tr>";
				echo "<tr><th>Division: </th><td>".($a/$b)."</td></tr>";
			}
			else
				echo "Invalid input";
			echo "</table>";
		}

		?>
		</table>
		</form>
	</div>
</body>
</html>