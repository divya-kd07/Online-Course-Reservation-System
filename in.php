<?php
 session_start();
 echo  "<h1> <center>WELCOME  ".$_SESSION['name']."</center></h1>";
?>

<!DOCTYPE html>
<html>
<head>
<style>
.bgimg{
    background-image:url('cpj.jpg');
	width:1340px;
}
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body bgcolor="gray">


<div class="bgimg">
<h2>Learn to code for FREE!</h2>
<h2>Anytime and Anywhere,on Any Device<br><br><br>Start Learning Now</h1>
</div>

<div class="row">
  <div class="column">
    <a href="index.php">
    <img src="py.png" alt="python" width="400" height="330"></a>
	</div>
  <div class="column">
  <a href="index2.php">
    <img src="c++.png" alt="C++" width="400" height="330"></a>
  </div>
  <div class="column">
  <a href="index3.php">
    <img src="java.png" alt="Java" width="400" height="330"></a>
  </div>
</div><br>
<form action="update.php" method="POST"><center>
<button>UpdateYourDetails</button><br><br><br></center>
</form>
</body>
</html>
