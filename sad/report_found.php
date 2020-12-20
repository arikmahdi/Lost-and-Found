<?php
    session_start();
    
    if($_SESSION['isloggedin']==true){
        ///show the home page
        
        ///way 2: to show frontend code
        
        ?>
		
		<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="utf-8">
        <title>Report lost animal</title>
		
		


    </head>
    
    <body>
	
		 <style>
						body {
						  background-image: url('images/pic2.jpg');
						  background-repeat: no-repeat;
						  background-attachment: fixed;
						  background-size: 100% 100%;
						}
		
		</style>
		<font size="4px" style = "position:absolute; left:1230px; top:20px;"><a href="logout.php" style="color:red" >Click to Logout</a></font>
		<fieldset style = "width: 600px; margin:  50px auto; background:rgba(1,1,1,0.5); border:3px solid purple">
		
		       <font color="red">
		       <h1>&emsp;&emsp;&emsp;&emsp;Report about found object </h1>
				<font color="white">
					
						<form action="report_found_store.php" method="post">
						
						    
							
							Select category: 
						<select id="cat" name="cat">
						       
						         
						          <option value="object">Object</option>
								  <option value="person">Person</option>
								  <option value="pets">Pets</option> 
								
								</select><br/><br/>
							
							Name:<br/> <input type="text" name="name_f" id="name_f" size="70" placeholder="Optional" ><br/><br/>
							
							
							
							Location:<br/> <input type="text" name="location_f" id="location_f" size="70" placeholder="Where it was found "><br/><br/>
							
							Date: <input type="date" id="date_f" name="date_f"> (When it was found)<br/><br/>
							
							Description: <br/> <input type="text" name="desc_f" id="desc_f" size="70" placeholder="Optional"><br/><br/>
							
							Image: <input type="file" id="pic_f" name="pic_f"><br><br>
							
							
							
							Name:<br/> <input type="text" name="name_u_f" id="name_u_f" size="70"  placeholder="Enter your name"><br/><br/>
							
							Number:<br/> <input type="tel" name="num_u_f" id="num_u_f" minlength="11" maxlength="11" ><br/><br/>
								
							<input type="submit" value="Post">
						</form>
		
		
		</fieldset>
		
		
</body>
</html>
<?php
        
    }
    else{
        ?>
            <script>location.assign('login.php');</script>

        <?php
    }
?>			