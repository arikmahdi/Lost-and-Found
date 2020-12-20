<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="utf-8">
        <title>Log In</title>
		<style>
		body {
		 background-image: url('images/pic1.jpg');
		 background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;
		}
		</style>
    </head>
    
    <body>
	
<font size="4px" style = "position:absolute; left:1250px; top:20px;"><a href="home.php" style="color:red" >Go Back</a></font>
	 
	<fieldset style = "width: 500px; margin:  200px auto; background:rgba(1,1,1,0.5); border:3px solid purple">
	<font color="white">
	<h1>&emsp;&emsp;&emsp;&nbsp;LOST & FOUND </h1>
	<font color="red">
	<h3>Sign in using your account </h3>
	<font color="white">
        <form action="verifylogin.php" method="post">
            Email
			<br/> <input type="email" name="uemail" id="uemail" size="60" >
            <br/>
            <br/>
           Password
		   <br/><input type="password" name="upass" id="upass" size="60">
            <br/>
            <br/>
            <input type="submit" value="Sign In" >
			<br/><br/>
			<font color="white">
			<font size="5px"><a href="signup.php" style="color:red" >Create account</a></font>
        </form>
	</fieldset>
    </body>
</html>