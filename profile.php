	<?php
require_once "blogin" ;


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MY CV</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
	<header  class="">
		<img class="logo" src="image/mucv5.png" alt="">
		<a href="profile.php" title=""><h2><?php echo $_SESSION["userEmail"];?></h2></a>
		
		<nav class="nav_Link">
			<ul>
			<?php
					
					if ( isset($_SESSION["userEmail"])) {
						echo '<li><a href="home.php" title="">Home</a></li>';
						echo '<li><a href="logout_cor.php" title="">Logout</a></li>';
						echo '<li><a href="#" title="">About</a></li>';
					  

				}
				else{
					echo '<li><a href="#" title="">MY CV</a></li>';
				}
				
			?>
				
				
				
				
			</ul>
		</nav>

	</header><!-- /header -->
    <?php
       if (isset($_GET["success"])) {
       	echo '<p class="success">Your data has been successfully saved</p>';
       	
       }

    ?>
    <div class="profile">
    	<div>
    		<img class="profile-photo" src="IMG_2964.JPG">

    	    <section personal-section>
            <div class="content1">

               <div class="feft-d" > <h2> Parsonal Information </h2>
                </div>
               <div class="right-d" >
                <p> Name: Md. Mominul Islam Pramanik 
                </p>
                <p>Permanent Address: Salla, Kalihati,Tangail</p>
                 <p> Present Address: Dhaka,Bangladesh</p>
                 <p> </p>
                
                </div>
              
            </div>
    </section>
    	</div>
    </div>

</body>
</html>