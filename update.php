<html>
<?php $conn = mysqli_connect("localhost","root","","ocrsdv") or die ("connection failed");?>
<head>
<style>
.bgimg{
    background-image:url('f5.jpg');
	background-size:cover;
	height:800;
	width:1300;

}
</style>
</head><center>
<body bgcolor="grey">
<div class="bgimg">
</style><br><br><br>
<center><h1>UPDATING FORM<h1><center>
<br><a href="http://localhost/course/in.php"><h4>Back</h4></a><br>
<form method="post">
<table>
<tr><td>Email Id</td><td><input type="text" name="e" required></td></tr>
<tr><td>Address</td><td><input type="varchar" name="add"></td></tr>
<tr><td>Mobile Number</td><td><input type="varchar" name="ph"></td></tr>
<tr><td>Course</td><td> <select name="Course">
<option value="python">PYTHON</option>
<option value="c++">C++</option>
<option value="java">JAVA</option>
</select></td><tr>
<tr><td><input type="submit" name="i" value="update"><td></tr>
</table>
</form>

</center>
</body>
<?php
if(isset($_POST["i"]))
{
	$EmailId=$_POST["e"];
	$Address=$_POST["add"];
	$MobileNumber=$_POST["ph"];
	$Course=$_POST["Course"];
	mysqli_query($conn,"UPDATE register SET Address='$Address',MobileNumber='$MobileNumber',Course='$Course' WHERE EmailId='$EmailId'") or die ("could not enter");
	echo "Updated successfully!";
}
?>
</div>
</html>
	
			
