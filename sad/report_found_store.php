<?php
    session_start();
	
    
    if($_SESSION['isloggedin']==true){
        ///show the home page
        
        ///way 2: to show frontend code
	
        
        ?>
		
		<?php
		
		 if(isset($_POST['cat']) && isset($_POST['name_f'])  && isset($_POST['location_f']) && isset($_POST['date_f']) && isset($_POST['desc_f'])  && isset($_POST['pic_f'])  && isset($_POST['name_u_f']) && isset($_POST['num_u_f']) ){
        ///processing
        $a=$_POST['name_f'];
        $b=$_POST['cat'];
		$c=$_POST['location_f'];
		$d=$_POST['date_f'];
		$e=$_POST['desc_f'];
		$f=$_POST['pic_f'];
		$g=$_POST['name_u_f'];
		$h=$_POST['num_u_f'];
	///	$p=$_POST['uemail'];
		$i=$_SESSION["mail"];
		
	
		
		
		
		
		     try{
            ///try to connect with database
            $conn=new PDO("mysql:host=localhost:3306;dbname=sad_project", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $ex){
            ///back to login.php
            echo "<script>location.assign('login.php');</script>";
        }
		
	
	   
	   $mysqlcode="INSERT INTO found VALUES('$n','$a','$b','$c','$d','$e','$f','$g','$h','$i')";
		
	echo $mysqlcode;
	
	try{
                $conn->exec($mysqlcode);
            
                echo "<script>location.assign('home2.php');</script>";
            }
            catch(PDOException $ex){
                echo "<script>location.assign('report_found_store.php');</script>";
            }
	

		
	
	}
		?>
		
		

<?php
        
    }
    else{
        ?>
            <script>location.assign('login.php');</script>

        <?php
    }
?>
		