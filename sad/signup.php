<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="utf-8">
        <title>Sign up</title>
    </head>
	
		<style>
		body {
		 background-image: url('images/PIC2.jpg');
		 background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;
		}
		</style>
    
     <body>
	<font size="4px" style = "position:absolute; left:1250px; top:20px;"><a href="home.php" style="color:red" >Go Back</a></font>
	
	 <fieldset style = "width: 500px; margin:  200px auto; background:rgba(1,1,1,0.5); border:3px solid purple">
		 <font color="white">
		<h1>&emsp;&emsp;&emsp;&nbsp;LOST & FOUND </h1>
		<font color="red">
		<h3>Create a new account </h3>
		<font color="white">
	
        <form action="register.php" method="post">
            Email
			<br/>
			<input type="email" name="uemail" id="uemail" size="60" >
            <br/>
            <br/>
            Password
			<br/>
			<input type="password" name="upass" id="upass" size="60">
            <br/>
            <br/>
            <input type="submit" value="Sign Up">
        </form>
		</fieldset>
    </body>
</html>