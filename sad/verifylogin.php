<?php
    ///receive user credential
    ///match with the database data
    ///if no match found, return back to login.php
    ///if match found, forward to home.php
    
    ///php code, inside server
    ///$_GET , superglobal variable
    ///php variable declare $ sign diye
    ///$varname
    ///empty check, empty($varname)
    ///print , echo "your message";
    ///variable exist, isset($varname)

    ///$_POST['uemail']
    ///$_POST['upass']

    if(isset($_POST['uemail']) && isset($_POST['upass'])){
        ///processing
        $i=$_POST['uemail'];
        $j=$_POST['upass'];
		
		
    
        ///creating database connection
        ///I will use "PDO" connection method
        
        try{
            ///try to connect with database
            $conn=new PDO("mysql:host=localhost:3306;dbname=sad_project", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $ex){
            ///back to login.php
            echo "<script>location.assign('login.php');</script>";
        }
        
        
        ///this line is executed meaning db connection successful
        $mysqlcode="SELECT * FROM user WHERE email='$i' and password='$j' ";
        ///echo $mysqlcode;
        
        ///executing the query
        $ret=$conn->query($mysqlcode);
        if($ret->rowCount()==1){
            ///valid user found
            session_start();
			 
            $_SESSION["isloggedin"]=true;
			
			$_SESSION["mail"]=$_POST['uemail'];
		
	
			
            
            echo "<script>location.assign('home2.php');</script>";
        }
        else{
            ///invalid user email and comment
            echo "<script>location.assign('login.php');</script>";
        }
        
    }
    else{
        ///back to login.php page
        ///javascript
        ///<script>location.assign('pagename.php');</script>
        
        ///how to write frontend code (html, css, js) within php
        //way 1: echo "html/css/js";
        //way 2: pore dekhabo
        echo "<script>location.assign('login.php');</script>";
    }
    
?>