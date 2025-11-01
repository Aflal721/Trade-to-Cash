 <?php session_start();
              $con = mysqli_connect("localhost","root","","advertisementdb","3306");
			   if(!$con)
			   {	
				die("Cannot upload the file, Please choose another file");		
			   }    

		$sql = "DELETE FROM `tbladvertisement` WHERE `tbladvertisement`.`advertisementID` =".$_GET["id"].";";
            
           if (mysqli_query($con,$sql))
           {
               	header('Location:ViewMyAdvertisements.php');
           }
           
           ?>