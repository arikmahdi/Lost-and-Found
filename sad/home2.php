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
        <title>Home</title>
		
		


    </head>
    
    <body>
	
		 <style>
						body {
						  background-image: url('images/pic1.jpg');
						  background-repeat: no-repeat;
						  background-attachment: fixed;
						  background-size: 100% 100%;
						}
						
		body 
						{
						 margin:0;
						 padding:0;
						 
						}
						.container
						{
						 text-align: center;
						 margin-top: 260px;
						}
						.btn
						{
						 border: 3px solid #3498db;;
						 
						 background:rgba(1,1,1,0.5);
						 height:60px;
                         width:250px;
						 font-size: 30px;
						 font-family: "montserrat";
						 cursor: pointer;
						 margin: 10px;
						 transition: 0.4s;
						 position: relative;
						}
						.btn1,.btn2,.btn3,.btn4,.btn5,.btn6{
						 color: #3498db;
						}
						
						
						.btn1:hover,.btn2:hover,.btn3:hover,.btn4:hover,.btn5:hover,.btn6:hover,hover{
						 color: #fff;
						}
						
						
						
						
		</style>
		
	
		
		<font size="4px" style = "position:absolute; left:1230px; top:20px;"><a href="logout.php" style="color:red" >Click to Logout</a></font>
		
		<div class="container">
		
		
	    <a href="my_report.php"><button class="btn btn1">My Report</button>
        <a href="report_found.php"><button class="btn btn2">Report Found</button>
		<a href="view_f.php"><button class="btn btn3">View Found items</button>
		</br>
	
		
		</div>

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