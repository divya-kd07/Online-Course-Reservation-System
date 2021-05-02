<?php
   session_start();
   $db = mysqli_connect('localhost','root','','ocrsdv');
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $Name =$_POST['n'];
      $Password =$_POST['pwd'];
      $sql = "SELECT Name,Password FROM register WHERE  Name= '$Name' and Password= '$Password'";
      $result = mysqli_query($db,$sql);
	  if($result){
		  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		  $count = mysqli_num_rows($result);
		  if($count == 1) {
			 $_SESSION['name'] = $Name;
			 echo "<script>window.open('in.php','_self');</script>";
		  }else {
			  echo "<script>alert('Invalid Username or Password!!');</script>";
			  echo "<script>window.open('login1.php','_self');</script>";
		  }
	  }
	  else{
		  echo mysqli_error($db);
	  }
   }
?>
