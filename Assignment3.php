<html>
<title>ONLINE RESERVATION SYSTEM </title>
<head>
<?php $conn = mysqli_connect("localhost","root","","ocrsdv") or die ("connection failed");?>
<style>
body {
background-color: Aqua;
}
h1 {
color: Dodgerblue;
text-align: center;
}
h2 {
color: Red;
text-align: center;
}
</style>
</head>
<body>
<h1>ASSIGNMENT</h1><a href="http://localhost/course/index3.php"><h3>Back</h3></a>

</form><h2>CHOOSE THE CORRECT ANSWERS</h2>
<form method="post"><h3>
1.What is the range of short data type in Java?<br>
<input type="radio" value="a" name="q1">-32768 to 32767<br>
<input type="radio" value="b" name="q1">-128 to 127<br>
<input type="radio" value="c" name="q1">-2147483648 to 2147483647<br>
<br>
2.Modulus operator, %, can be applied to which of these?<br>
<input type="radio" value="a" name="q2">Integers<br>
<input type="radio" value="b" name="q2">Floating point numbers<br>
<input type="radio" value="c" name="q2">Both<br>
<br>
3.Which of these keywords is used to make a class?<br>
<input type="radio" value="a" name="q3">int<br>
<input type="radio" value="b" name="q3">struct<br>
<input type="radio" value="c" name="q3">class<br>
<br>
4.Which of this keyword can be used in a subclass to call the constructor of superclass?<br>
<input type="radio" value="a" name="q4">super<br>
<input type="radio" value="b" name="q4">this<br>
<input type="radio" value="c" name="q4">extends<br>
<br>
5.Which of these keywords are used for the block to be examined for exceptions?<br>
<input type="radio" value="a" name="q5">catch<br>
<input type="radio" value="b" name="q5">try<br>
<input type="radio" value="c" name="q5">throw<br>
</h3><br>
<input type="submit" value="Submit" name="s">
</form>

<?php
session_start();
if(isset($_POST["s"]))
{
	$Name=$_SESSION['name'];
	$q1=$_POST["q1"];
	$q2=$_POST["q2"];
	$q3=$_POST["q3"];
	$q4=$_POST["q4"];
	$q5=$_POST["q5"];
	$mark=0;
	if($q1=='a')
		$mark++;
	if($q2=='c')
		$mark++;
	if($q3=='c')
		$mark++;
	if($q4=='a')
		$mark++;
	if($q5=='b')
		$mark++;
	mysqli_query($conn,"insert into assignment values ('$Name','$q1','$q2','$q3','$q4','$q5','$mark')") or die ("could not enter");
	echo "<h3>Submit successfully!</h3>";
}
?>

</body>
</html>

