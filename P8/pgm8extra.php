<!DOCTYPE html>
<html>
<head>
<title>Converter</title>
</head>
<body>

<center>
<h1><b>Aayush Lal Roy<br>1CR17CS003</b></h1>
<h2>CONVERTER</h2>
<?php
if(isset($_POST['display'])){
$num=$_POST['numb'];
$opt1=$_POST['opt1'];
$opt2=$_POST['opt2'];
$num1;
$ans=0;
switch($opt1)
{
case "km" : $num1 = $num*1000; break;
case "m" : $num1=$num; break;
case "cm" : $num1=$num/100; break;
case "mm" : $num1=$num/1000; break;
case "mc" : $num1=$num/1000000; break;
case "nm" : $num1=$num/1000000000; break;
case "mile" : $num1=$num*1609; break;
case "y" : $num1=$num/1.094; break;
case "f" : $num1=$num/3.281; break;
case "inch" : $num1=$num/39.37; break;
case "nauc" : $num1=$num*1852; break;
}

switch($opt2)
{
case "km2" : $ans = $num1/1000; break;
case "m2" : $ans = $num1; break;
case "cm2" : $ans = $num1*100; break;
case "mm2" : $ans = $num1*1000; break;
case "mc2" : $ans = $num1*1000000; break;
case "nm2" : $ans = $num1*1000000000; break;
case "mile2" : $ans = $num1/1609; break;
case "y2" : $ans = $num1*1.094; break;
case "f2" : $ans = $num1*3.281; break;
case "inch2" : $ans = $num1*39.37; break;
case "nauc2" : $ans = $num1/1852; break;
}}
?>
<form method="post">
<br>
<select name="opt1">
<option value="km" id="km" <?php echo (isset($_POST['opt1']) && $_POST['opt1'] == 'km') ? 'selected="selected"' : ''; ?>>kilometer</option>
<option value="m" id="m" <?php echo (isset($_POST['opt1']) && $_POST['opt1'] == 'm') ? 'selected="selected"' : ''; ?>>meter</option>
<option value="cm" id="cm" <?php echo (isset($_POST['opt1']) && $_POST['opt1'] == 'cm') ? 'selected="selected"' : ''; ?>>centimeter</option>
<option value="mm" id="mm" <?php echo (isset($_POST['opt1']) && $_POST['opt1'] == 'mm') ? 'selected="selected"' : ''; ?>>millimeter</option>
<option value="mc" id="mc" <?php echo (isset($_POST['opt1']) && $_POST['opt1'] == 'mc') ? 'selected="selected"' : ''; ?>>micrometer</option>
<option value="nm" id="nm" <?php echo (isset($_POST['opt1']) && $_POST['opt1'] == 'nm') ? 'selected="selected"' : ''; ?>>nanometer</option>
<option value="mile" id="mile" <?php echo (isset($_POST['opt1']) && $_POST['opt1'] == 'mile') ? 'selected="selected"' : ''; ?>>mile</option>
<option value="y" id="y" <?php echo (isset($_POST['opt1']) && $_POST['opt1'] == 'y') ? 'selected="selected"' : ''; ?>>yard</option>
<option value="f" id="f" <?php echo (isset($_POST['opt1']) && $_POST['opt1'] == 'f') ? 'selected="selected"' : ''; ?>>foot</option>
<option value="inch" id="inch" <?php echo (isset($_POST['opt1']) && $_POST['opt1'] == 'inch') ? 'selected="selected"' : ''; ?>>inch</option>
<option value="nauc" id="nauc <?php echo (isset($_POST['opt1']) && $_POST['opt1'] == 'nauc') ? 'selected="selected"' : ''; ?>">nautical mile</option>
</select>
<select name="opt2">
<option value="km2" id="km2" <?php echo (isset($_POST['opt2']) && $_POST['opt2'] == 'km2') ? 'selected="selected"' : ''; ?>>kilometer</option>
<option value="m2" id="m2" <?php echo (isset($_POST['opt2']) && $_POST['opt2'] == 'm2') ? 'selected="selected"' : ''; ?>>meter</option>
<option value="cm2" id="cm2" <?php echo (isset($_POST['opt2']) && $_POST['opt2'] == 'cm2') ? 'selected="selected"' : ''; ?>>centimeter</option>
<option value="mm2" id="mm2" <?php echo (isset($_POST['opt2']) && $_POST['opt2'] == 'mm2') ? 'selected="selected"' : ''; ?>>millimeter</option>
<option value="mc2" id="mc2" <?php echo (isset($_POST['opt2']) && $_POST['opt2'] == 'mc2') ? 'selected="selected"' : ''; ?>>micrometer</option>
<option value="nm2" id="nm2" <?php echo (isset($_POST['opt2']) && $_POST['opt2'] == 'nm2') ? 'selected="selected"' : ''; ?>>nanometer</option>
<option value="mile2" id="mile2" <?php echo (isset($_POST['opt2']) && $_POST['opt2'] == 'mile2') ? 'selected="selected"' : ''; ?>>mile</option>
<option value="y2" id="y2" <?php echo (isset($_POST['opt2']) && $_POST['opt2'] == 'y2') ? 'selected="selected"' : ''; ?>>yard</option>
<option value="f2" id="f2" <?php echo (isset($_POST['opt2']) && $_POST['opt2'] == 'f2') ? 'selected="selected"' : ''; ?>>foot</option>
<option value="inch2" id="inch2" <?php echo (isset($_POST['opt2']) && $_POST['opt2'] == 'inch2') ? 'selected="selected"' : ''; ?>>inch</option>
<option value="nauc2" id="nauc2" <?php echo (isset($_POST['opt2']) && $_POST['opt2'] == 'nauc2') ? 'selected="selected"' : ''; ?>>nautical mile</option>
</select>
<br><br>

<input type="text" name="numb" value="<?php if(isset($_POST['numb'])) { echo  htmlentities($_POST['numb']);}?>"><br><br>
<input type="submit" id="display" name="display" ><br><br>
<input name="" type="text" value="<?php echo $ans ?>" />
<br><br>
</form>

</center>

</body>
</html>
