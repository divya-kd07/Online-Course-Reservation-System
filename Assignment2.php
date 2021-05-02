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
<h1>ASSIGNMENT</h1><a href="http://localhost/course/index2.php"><h3>Back</h3></a>

</form><h2>CHOOSE THE CORRECT ANSWERS</h2>
<form method="post"><h3>
1.How many loops are there in C++ 98?<br>
<input type="radio" value="a" name="q1" >3<br>
<input type="radio" value="b" name="q1" >4<br>
<input type="radio" value="c" name="q1" >1<br>
<br>
2.Which operator can not be overloaded?<br>
<input type="radio" value="a" name="q2">+<br>
<input type="radio" value="b" name="q2">*<br>
<input type="radio" value="c" name="q2">::<br>
<br>
3.Correct syntax for creating a thread using Function Pointer?
thread_function is the name of function which need to be executed
in separate thread.<br>
<input type="radio" value="a" name="q3">std::thread threadObj(&thread_function);<br>
<input type="radio" value="b" name="q3">std::thread threadObj((void *)thread_function);<br>
<input type="radio" value="c" name="q3">std::thread threadObj(thread_function);<br>
<br>
4.Can any function call itself?<br>
<input type="radio" value="a" name="q4">Yes<br>
<input type="radio" value="b" name="q4">No<br>
<input type="radio" value="c" name="q4">Runtime Error<br>
<br>
5.Why seekg() is used in file handling of C++<br>
<input type="radio" value="a" name="q5">Moves put pointer (output) to a specified location<br>
<input type="radio" value="b" name="q5">Moves get pointer (input) to a specified location<br>
<input type="radio" value="c" name="q5">Gives the current position of the get pointer<br>
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

