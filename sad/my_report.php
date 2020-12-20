<?php
    session_start();
    
    if($_SESSION['isloggedin']==true){
        ///show the home page
      
        ///way 2: to show frontend code
        $p=$_SESSION["mail"];
        ?>
            <!--you page code-->
            <!DOCTYPE html>

            <html>

                <head>
                    <meta charset="utf-8">
                    <title>Found items</title>
					 <style>
					 body {
							
							background-repeat: no-repeat;
							background-attachment: fixed;
							background-size: 100% 100%;
							}
                        table{
                            width: 100%;
							 background-color: white;
							 position:absolute;
							 
							   left:25%;
                        }
                        
                        table, th, td{
                            border: 4px solid black;
                            border-collapse: collapse;
                            text-align: center;
							width: 50%;
                        }
                
                        tr:hover{
                            background-color: #D3D3D3;
                        }
					</style>	
                </head>

                <body>
                   <font size="4px" style = "position:absolute; left:1230px; top:20px;"><a href="logout.php" style="color:red" >Click to Logout</a></font>
                    <br/>
                  
					<font size="15px" style="color:red">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Found </font>
					
					 <table>
                            <thead>
                                <tr>
                                    <th><font size="5px" style="color:red">Item</th></font>
									<th><font size="5px" style="color:red">Information</th></font>
                                   
                                

                            </thead>
                            
                            <tbody>
                                <?php
        
                                    try{
                                        $conn=new PDO("mysql:host=localhost:3306;dbname=sad_project","root","");
                                        
                                        
                                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    }
                                    catch(PDOException $ex){
                                        ?>
<!--                                        outside php -->
                                        <script>
                                            alert("Database connection error");    
                                        </script>
                                        <?php
                                    }
        
                                    $mysqlquery="select * from found where f_u_email='$p'";
								
                                    
                                    $result=$conn->query($mysqlquery); ///$result object
                                    ///no of rows, $result->rowCount();
        
                                    ///reading the whole table
                                    $table=$result->fetchAll();
        
        
                                    ////print_r($table);
        
        
                                    ///processing
                                    for($i=0;$i<count($table);$i++){
                                        ///$row 1D array
                                        $row=$table[$i];
                                        ?>
										
                                        <tr>
										  <td>
										  <img src="<?php echo $row['f_image'] ?>" width="180" height="150">
										  <?php echo "<br>" ?>
										  <?php echo $row['f_name'] ?>
										 
										  
										  </td>
										 <td>
										 <?php echo '<br><b style="color:black;font-size:18px;font-family:calibri ;">Category:  </b> ';?> 
										 <?php echo $row['f_category'] ?>
										 
										 <?php echo '<br><b style="color:black;font-size:18px;font-family:calibri ;">Location:  </b> ';?> 
										 <?php echo $row['f_location'] ?>
										 
										 <?php echo '<br><b style="color:black;font-size:18px;font-family:calibri ;">Date:  </b> ';?> 
										 <?php echo $row['f_date'] ?>
										 
										 <?php echo '<br><b style="color:black;font-size:18px;font-family:calibri ;">Description:  </b> ';?> 
										 <?php echo $row['f_desc'] ?>
										 
										 <?php echo '<br><b style="color:black;font-size:18px;font-family:calibri ;">Finder:  </b> ';?> 
										 <?php echo $row['f_u_name'] ?>
										 
										 <?php echo '<br><b style="color:black;font-size:18px;font-family:calibri ;">Number:  </b> ';?> 
										 <?php echo $row['f_u_phn'] ?>
										 
										  <?php echo '<br>'?>
										 
										 </td>
										 
								
										

                                 
                                        <?php
                                    }
                                ?>
                            </tbody>
                        </table>
					
					
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


