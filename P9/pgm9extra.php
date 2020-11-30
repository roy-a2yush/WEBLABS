<html>
<head>
<title>USN Checker</title>
<style>
#idd{
	margin: 100px;
}
</style>
</head>
<body>
<form method="POST" id="idd">
<h1>Aayush Lal Roy (1CR17CS003)</h1>
<input type="text" name="USN" placeholder="Enter USN">
<input type="submit" value="Check" name="sub">
</form>
<?php
if(isset($_POST["sub"])){
$usn = $_POST["USN"];
$usn = strtoupper($usn);
if(preg_match("/^[1-4][A-Z][A-Z][0-9][0-9][A-Z][A-Z][0-9][0-9][0-9]$/",$usn)){
echo "<b>USN is Valid</b>";
} else {
echo "<script> alert('Enter valid USN'); </script>";
}
}
?>
</body>
</html>