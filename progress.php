<html>
<head>
<title>ONLINE REGISTRATION SYSTEMS </title>
<?php $conn = mysqli_connect("localhost","root","","ocrsdv") or die ("connection failed");?>
<style>
body{
	background-color:bisque;
}
</style>
</head>
<body>
<h1 ALIGN="CENTER">PROGRESS REPORT</h1>

<br><a href="http://localhost/course/index.php"><h3>Back</h3></a><br>
<br><br><br>
<table align="center"> 
<?php
session_start();
if(isset($_POST["s"]))
{
	$name=$_SESSION['name'];
	$result=mysqli_query($conn,"select * from register where Name='$name'") or die ("could not enter");
	while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr><td>Name</td><td>".$row["Name"]."</td></tr>";
        echo "<tr><td>FatherName</td><td>".$row["FatherName"]."</td></tr>";
		echo "<tr><td>DateOfBirth</td><td>".$row["DateOfBirth"]."</td></tr>";
        echo "<tr><td>EmailId</td><td>".$row["EmailId"]."</td></tr>";
		echo "<tr><td>Address</td><td>".$row["Address"]."</td></tr>";
		echo "<tr><td>MobileNumber</td><td>".$row["MobileNumber"]."</td></tr>";
		echo "<tr><td>Qualification</td><td>".$row["Qualification"]."</td></tr>";
		echo "<tr><td>Gender</td><td>".$row["Gender"]."</td></tr>";
	    echo "<tr><td>Course</td><td>".$row["Course"]."</td></tr>";
		echo "<tr><td>CourseDuration</td><td>".$row["CourseDuration"]."</td></tr>";
    }
	$result1=mysqli_query($conn,"select * from Assignment where Name='$name'") or die ("could not enter");
	while($row1=mysqli_fetch_assoc($result1))
    {
        echo "<tr><td>Assignment Mark</td><td>".$row1["Mark"]."</td></tr>";
	}
	echo "</table>
    <h1 align='center'>Successfully Completed!!!!</h1>";
	
}

?>
</body>
</html>