<html>
<?php $conn = mysqli_connect("localhost","root","","ocrsdv") or die ("connection failed");?>
<head>
<style>
.bgimg{
    background-image:url('reg.jpg');
	background-size:cover;
	height:600;
	width:1000;

}</style>
</head><center>
<body bgcolor="grey">
<div class="bgimg">
</style><br><br><br>
<center><h1>REGISTRATION FORM<h1><center>
<form method="post">
<table>
<tr><td>Name</td><td><input type="text" name="n" required></td></tr>
<tr><td>Father's Name</td><td><input type="text" name="n1" required></td></tr>
<tr><td>Date Of Birth</td><td><input type="varchar" name="dob" placeholder="yyyy-mm-dd"></td></tr>
<tr><td>Email Id</td><td><input type="text" name="e" required></td></tr>
<tr><td>Password</td><td><input type="varchar" name="pwd" required></td></tr>
<tr><td>Address</td><td><input type="varchar" name="add"></td></tr>
<tr><td>Mobile Number</td><td><input type="varchar" name="ph"></td></tr>
<tr><td>Qualification</td><td><input type="text" name="qua"></td></tr>
<tr><td>Gender</td><td>  <select name="Gender">
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Others">Others</option>
</select></td></tr>
<tr><td>Course</td><td> <select name="Course">
<option value="python">PYTHON</option>
<option value="c++">C++</option>
<option value="java">JAVA</option>
</select></td><tr>
<tr><td>CourseDuration:</td><td><select name="c1">
<option value="Six weeks">Six weeks</option>
<option value="Eight weeks">Eight weeks</option>
<option value="Four weeks">Four weeks</option>
<option value="Three weeks">Three weeks</option></td></tr>
<tr><td><input type="submit" name="i" value="insert"><td></tr>
</table>
</form>

</center>
</body>
<?php
if(isset($_POST["i"]))
{
	$Name=$_POST["n"];
	$FatherName=$_POST["n1"];
	$DateOfBirth=$_POST["dob"];
	$EmailId=$_POST["e"];
	$Password=$_POST["pwd"];
	$Address=$_POST["add"];
	$MobileNumber=$_POST["ph"];
	$Qualification=$_POST["qua"];
	$Gender=$_POST["Gender"];
	$CourseDuration=$_POST["c1"];
	$Course=$_POST["Course"];
	mysqli_query($conn,"insert into register values ('$Name','$FatherName','$DateOfBirth','$EmailId','$Password','$Address','$MobileNumber','$Qualification','$Gender','$Course','$CourseDuration')") or die ("could not enter");
	echo "Registered successfully!";
}
?>
</div>
</html>
	
			
