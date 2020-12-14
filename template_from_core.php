	<?php

$host="localhost";
$db_User="mycv";
$db_pwd="mycv";
$db_name="my_cv";
$connect=mysqli_connect($host,$db_User,$db_pwd,$db_name);

$userhName = $_POST["fname"];
$userproName = $_POST["proName"];
$useremail = $_POST["email"];
$userfackboock = $_POST["fackboock"]; 
$userphoneNumber = $_POST["phoneNumber"];
 $userpName = $_POST["pName"]; 
 $userpermanentAddress = $_POST["permanentAddress"]; 
 $userpresentAddress = $_POST["presentAddress"]; 
 $userworkExperienc = $_POST["workExperienc"]; 
 $userskill = $_POST["skill"];  
 $userschoolName = $_POST["schoolName"];  
 $userschoolAddress = $_POST["schoolAddress"]; 
 $userspYear = $_POST["spYear"]; 
 $usercName = $_POST["cName"]; 
 $usercAddress = $_POST["cAddress"]; 
 $usercpYear = $_POST["cpYear"]; 
 $useruName = $_POST["uName"]; 
 $useruDname = $_POST["udName"]; 
 $userupYear = $_POST["upYear"]; 
 $useruAddress = $_POST["uAddress"]; 
$nameForDB=uniqid();

 
 
	
	
     	$insertQuere = "INSERT INTO user ( db_hName ,db_proName ,db_email ,db_fackboock , db_phoneNumber, db_pName, db_permanentAddress , db_presentAddress , db_workExperienc , db_skill , db_schoolName , db_schoolAddress , db_spYear , db_cName , db_cpYear  , db_cAddress , db_uName, db_udName , db_upYear , db_uAddress )




     	 VALUES ( '$userhName' ,'$userproName'  , '$useremail' , '$userfackboock' , '$userphoneNumber' , '$userpName ', '$userpermanentAddress' , '$userpresentAddress', '$userworkExperienc' , '$userskill' , '$userschoolName' , '$userschoolAddress' ,'$userspYear' , '$usercName','$usercAddress' , '$usercpYear' , '$useruName' , '$useruDname' , '$userupYear' , ' $useruAddress'  )"; 

              $run_Query = mysqli_query ($connect , $insertQuere);
				if($run_Query==true){
					header("location:profile.php?success=Data ins");
					
				}
	

else{
	  header("location:template2from.php?Data not ins");
		
	}		
    
	



?>
	
	