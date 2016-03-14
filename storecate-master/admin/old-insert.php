<?php
		$con = mysqli_connect('127.0.0.1', 'root',' ') ;
		if (!$con)
		{
				echo 'not connected to server';
				}
				
		if (!mysqli_select_db ($con,'farecha') )
		
			{
					echo 'database not selected' ;
					}
					$nrc=$_POST['nrc'];
					$first_name=$_POST [ 'first_name'] ;
					$last_name=$_POST[ 'last_name' ];
					

					$sql=  INSERT INTO person (nrc, first_name, last_name) VALUES ( '$nrc',  ' $first_name', '$last_name') ;
					
					if (!mysqli_query($con,$sql) )
					
					{
						echo 'not inserted';
					}
					 
					else
					{
					echo 'inserted successfully';
					}
					
					header("refresh:2;url=index.html");
?>