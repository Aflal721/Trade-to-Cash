<?php session_start();

				if(isset($_POST["btnSubmit"]))
				{				
				$userName = $_POST["txtEmail"];
				$password =  $_POST["txtPassword"];
				
	            $con = mysqli_connect("localhost","root","","IT1917","3306");
				if(!$con)
				{	
						die("Sorry, We are facing a technical issue");		
				}	
		$sql = "SELECT * FROM `tbluser` WHERE `email` = '".$userName."' and `password` = '".$password."'";
				$results = mysqli_query($con,$sql);
										
				if(mysqli_num_rows($results)>0)
				{
					$_SESSION["userName"] = $userName;
					header('Location:myAccount.php');
				}
				else
				{ 
					header('Location:login.php');
				}
			  }
?>
