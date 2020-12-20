<?php
    ///collect data received from the sign up page
    ///insert the data to the database
    ///forward the user to the login.php

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
            echo "<script>location.assign('signup.php');</script>";
        }
        
        ///checking whether the user already exits
        $mysqlcode="SELECT * FROM user WHERE email='$i' and password='$j' ";
        ///echo $mysqlcode;
        
        ///executing the query
        $ret=$conn->query($mysqlcode);
        if($ret->rowCount()==1){
            echo "<script>location.assign('signup.php');</script>";
        }
        else{
            ///new user
            ///if database connection is ok
            $mysqlcode="INSERT INTO user VALUES('$i','$j')";
            ///echo $mysqlcode;
            
            try{
                $conn->exec($mysqlcode);
            
                echo "<script>location.assign('login.php');</script>";
            }
            catch(PDOException $ex){
                echo "<script>location.assign('signup.php');</script>";
            }
        }
    }
?>