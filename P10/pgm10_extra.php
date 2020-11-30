<?php 
 $con=mysqli_connect('localhost','root','','weblab3'); 
 $query="SELECT * from student"; 
 $result = mysqli_query($con, $query)or die(mysqli_error($con)); ?> 
<!DOCTYPE html> 
<html> 
<head> 
	<link rel="icon" href="roy.a2yush.png" type="image/gif" sizes="16x16">
	<title>Extra program 10</title> 
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
		<br>
<div class="container" > 
 <div class="text-center"> 
 
 <form method="post"> 
 <h4> Search Name : </h4> <input type="text" name="name" class="form-control"  placeholder="Enter Student Name" aria-describedby="basic-addon1"> 
 <button type="submit" name="submit" class="btn btn primary" >Done</button> 
 <?php 
 if (isset($_POST['submit'])){
$name = $_POST['name']; 
 $query1="SELECT * from student where name='$name'"; 
 $result = mysqli_query($con, $query1)or  die(mysqli_error($con)); 
 $resultCount=mysqli_num_rows($result);
 if($resultCount == 1) {
	 $row = mysqli_fetch_array($result); ?>  <h4><b style="color:black;">- SEARCH RESULTS -</b></h4> 
	 <h4><b style="color:black;">NAME:</b> <?php  print_r($row['name']); ?></h4> 
	 <h4><b style="color:black;">USN:</b> <?php  print_r($row['usn']); ?></h4> 
	 <h4><b style="color:black;">BATCH:</b> <?php  print_r($row['batch']); ?></h4> 
 <?php } else { ?>
 	 <h4><b style="color:black;">No Results Found!</b></h4> 
<?php }
 }; 
 ?> </h4> </form> 
 <br> 
 </div> 
 </div>  
</div>
</body> 
</html> 
