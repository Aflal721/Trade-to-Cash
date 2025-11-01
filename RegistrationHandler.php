<?php session_start();

				if(isset($_POST["btnSubmit"]))
				{	
				$name = $_POST["txtName"];
				$email = $_POST["txtEmail"];
				$password =  $_POST["txtPassword"];
				$contact =  $_POST["txtContactNo"];	
				
	            $con = mysqli_connect("localhost","root","","it1917","3306");
				if(!$con)
				{	
						die("Sorry, We are facing a technical issue");		
				}	
		        $sql = "INSERT INTO `tbluser` (`email`, `name`, `contactNumber`, `password`) VALUES ('".$email."', '".$name."', '".$contact."', '".$password."');";
					
				mysqli_query($con,$sql)	;
										
			    header('Location:login.php');
				
			    }
?>

