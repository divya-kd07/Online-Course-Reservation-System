<html>
 <head>
      <title>Online Course Reservation system </title>
      <style type = "text/css">
	  

         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
		 .head{
			 font-weight:bold;
			 font-size:25px;
			 text-align:center;
		 }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
		 h1 {
			color: blank;
		}
      </style>
   </head>
   
   <body bgcolor="LightGray"><br>
   		 <div class="head"><h1><marquee>DIVVLEARN CERTIFICATION</marquee></h1></div><br>
		<div align = "center">
         <div style = "width:400px;height:400px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;">
			<b><h2>Login</h2><p>Please fill in your credentials to login.</p></b></div>
            <div style = "margin:30px">
               <form method = "post" action="k.php">
                  <label>Name  :</label><input type = "text" name = "n" class = "box" required /><br /><br />
                  <label>Password  :</label><input type = "password" name = "pwd" class = "box" required /><br/><br />
                 <input type = "submit" value = "Login"/><input type="reset" value="reset"/>
				  <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
				  <!--<button type="submit" formaction="index.php">Sign In</button>-->
               </form>
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
            </div>
         </div>
      </div>
   </body>
</html>
