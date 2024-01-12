<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chelsea Hagosojos</title>
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<style type="text/css">
		html{
			scroll-behavior: smooth;
			font-size: 1.2vw;
		}
		body{
			font-family: Poppins;
			margin: 0;
			padding: 0;
			padding-left: 5%;
			background-color: #181818;
			text-align: justify;
		}
		.main{
			z-index: -1;
			position: absolute;
			right: 0px;
			padding: 0px;
			width: 78.3%;
			height: 100%;
		}
		.bgimg{
			z-index: -1;
			position: fixed;
			width: 100%;
			background-image: url(chebw.jpg);
			background-size: 80% 100%;
			background-repeat: no-repeat;
			height: 100%;
		}
		.up{
			position: fixed;
			right: 2%;
			bottom: 1%;
			z-index: 2;
			width: 2.5%;
			height: 7%;
			opacity: 0.5;
		}
		.up img{
			width: 100%;
			position: relative;
		}
		.nav{
			position: fixed;
			right: 2%;
			padding: 1%;
		}
		.nav a{
			position: relative;
			padding: 15px;
			padding-bottom: 5px;
			text-decoration: none;		
			color: white;
			font-size: 1.1vw;
		}
		.nav a:hover{
			color: #d0813d;
			border-bottom: 2px solid;
		}
		.content{
			position: absolute;
			background-color: white;
			width: 100%;
			height: 100%;
			margin-top: 100%;
		}
		.info{
			position: fixed;
			background-color: #181818;
			padding: 1%;
			width: 20%;
			height: 70%;
			margin-top: 6%;
			z-index: 2;
			box-shadow: -10px 10px 35px -5px;
		}
		.info img{
			position: relative;
			width: 80%;
			margin-top: 10%;
		}
		.name{
			color: #181818;
			z-index: 1;
			width: 100%;
			position: absolute;
			transform: rotate(90deg) translate(1px);
			font-size: 15vw;
			font-weight: 700;
			margin-top: 38.5%;
			margin-left: -28.1%;
			text-transform: uppercase;
		}
		#Profile{
			position: relative;
			padding-bottom: 9%;
			padding-top: 1%;
			background-color: white;
			width: 100%;
			height: 100%;
		}
		#Objectives{
			position: relative;
			padding-bottom: 9%;
			padding-top: 3%;
			background-color: white;
			width: 100%;
			height: 100%;
			background-color: #181818;
			line-height: 240%;
		}
		#Skills{
			position: relative;
			padding-bottom: 9%;
			padding-top: 5%;
			background-color: white;
			width: 100%;
			height: 100%;
		}
		#Education{
			position: relative;
			padding-bottom: 9%;
			padding-top: 1%;
			background-color: white;
			width: 100%;
			height: 100%;
		}
		.es:hover{
			box-shadow: -10px 10px 35px -5px;
			transition: 0.3s;
			boder: none;
			background-image: url("elem.jpg");
			background-size: 100% 100%;
		} 
		.es:hover img{
			opacity: 0;
		}
		.hs:hover{
			box-shadow: -10px 10px 35px -5px;
			transition: 0.3s;
			boder: none;
			background-image: url("hs.jpg");
			background-size: 100% 100%;
		} 
		.hs:hover img{
			opacity: 0;
		}
		.col:hover{
			box-shadow: -10px 10px 35px -5px;
			transition: 0.3s;
			boder: none;
			background-image: url("col.jpg");
			background-size: 100% 100%;
		} 
		.col:hover img{
			opacity: 0;
		}
	</style>
</head>
<body>
	<?php
		#habo ko na po
		$firstName = "Chelsea";
		$middleName = "Hapin";
		$lastName = "Hagosojos";
		$email = "chelseahagosojos@thelewiscollege.edu.ph";
		$phoneNumber = "09568414955";
		$courseYear = "BSIT 2A";
		$address = "Adovis, Casiguran, Sorsogon";
		$age = 19;
		$birthday = "November 16, 2003";
		$college = "The Lewis College";
		$course = "Bachelor of Science in Information Technology (BSIT)";
		$strand = "Science Technology Engineering and Mathematics (STEM)";
		$highSchool = "Casiguran Technical Vocational School";
		$elementary = "Casiguran Central School";
		$fb = "Chelsea Hapin Hagosojos";
		$ig = "@chlshgsjs";
		$perEmail = "chlshagosojos@gmail.com";
		$s1 = "IT skills";
		$s2 = "Creativity";
		$s3 = "Artistic Skills";
		$s4 = "Problem-Solving";
		$s5 = "Time Management";

	?>
	<div class="info">
		<center>
			<img src="che2.jpg">
			<?php
				echo "<h4 style = 'font-size: 1.3vw; margin: 0; margin-top: 4%; color: white;'>$firstName $middleName $lastName</h4>";
				echo "<p style = 'font-size: .78vw; margin: 0; margin-top: 1%; color: white;'>$email</p>";
				echo "<h5 style = 'font-size: 1.1vw; margin: 0; margin-top: 2%; letter-spacing: 1px; color: white;'>$courseYear</h5>";
			?>
			<img src="spotify.jpg">
		</center>
	</div>
	<div class="name">
		<span>
			<?php  
				echo $firstName;
			?>		
		</span>
	</div> 
	<div class="main">
		<span style="top: 0px; position: absolute;" id="up"></span>
		<div class="bgimg">
			<div class="nav">
				<a rel="noopener" href="#Profile">Profile</a>
				<a rel="noopener" href="#Objectives">Objectives</a>
				<a rel="noopener" href="#Skills">Skills</a>
				<a rel="noopener" href="#Education">Education</a>
			</div>
		</div>
		<div class="up"><a rel="noopener" href="#up"><img src="arrow.png"></a></div>
		<div class="content">
			<div id="Profile">
				<div style="position: absolute; width: 45%; margin-top: 8%; margin-left: 12%; line-height: 200%; padding-left: 3%;">
					<?php
						echo "<h1 style='letter-spacing: 5px; font-size: 2vw; color: #B54C2C;'> PROFILE </h1> <br>";
						echo "<span style='font-size: 1.5vw; text-transform: uppercase; letter-spacing: 3px;'>$firstName $middleName $lastName<br></span>";
						echo "Birthday: $birthday<br>";
						echo "Address: $address";
						echo "<br>";
						echo "<br>";
						echo "Hi! I'm $firstName $middleName $lastName a $age year old $courseYear student at $college, deeply committed to my academic pursuit, with a keen passion for learning and a drive to explore life's opportunities, while maintaining a strong appreciation for arts, fondness for coffee, and and an enthusiasm for new adventures.";
					?>
				</div>
				<div style="position: absolute; width:25%; height: 65%; background-color: #181818; right: 3%; margin-top: 3%; color: white; font-size: 1vw; padding-left: 3%; padding-top: 9%; line-height: 350%; letter-spacing: 1px;">
					<?php
						echo "<br>";
						echo "<img src='fb.png' width='8%'> $fb<br>";
						echo "<img src='ig.png' width='8%'> $ig<br>";
						echo "<img src='cp.jpg' width='8%'> $phoneNumber<br>";
						echo "<img src='gmail.png' width='8%'> $perEmail<br>";
					?>
				</div>
				<div style="background-color: #181818; width: 100%; height: 10%; position: absolute; bottom: 0;">
				
				</div>
			</div>
			<div id="Objectives">
				<div style="border: 3px solid #B54C2C; border-radius: 1%; width: 50%; height: 55%; position: absolute; margin-top: 6.2%; margin-left: 40%;">
					
				</div>
				<div style="position: absolute; width: 60%; margin-top: 8%; margin-left: 18%; color: white; background-color: #181818; padding: 2%; padding-left: 5%; padding-bottom: 4%; box-shadow: -10px 10px 35px -5px black;">
					<?php
						echo "<h1 style='letter-spacing: 5px; font-size: 2vw;'> OBJECTIVES </h1>";
						echo "1. Personal Growth and Well-being<br>2. Communication and Social Skills<br>3. Hobbies and Creative Pursuit<br>4. Help Others<br>5. Travel and Exploration<br>6. Academic Excellence";
					?>
				</div>
			</div>
			<div id="Skills">
				<div style="position: absolute; width: 80%; margin-top: 5%; margin-left: 12%;">
					<?php
						echo "<h1 style='letter-spacing: 5px; font-size: 2vw;'> SKILLS </h1>";
					?>
					<div style="position: relative; width: 90%; height: 20%; border: 2px solid #B54C2C; padding: 2%; line-height: 250%; margin-top: 7%;" id="h">
						<?php
							echo "<ol><li>$s1</li><li>$s2</li><li>$s3</li><li>$s4</li><li>$s5</li></ol>";
						?>
					</div>
				</div>
			</div>
			<div id="Education">
				<div style="position: absolute; width: 80%; margin-top: 5%; margin-left: 12%;">
					<?php
						echo "<h1 style='letter-spacing: 5px; font-size: 2vw; margin-bottom: 8%;'> EDUCATIONAL ATTAINMENT </h1>";
					?>
					<center>
						<div style="position: relative; width: 100%; display: flex; margin-top: -5%;">
							<div style="position: relative; width: 28%; margin: auto; margin-top: 3%;">
								<?php
									echo "ELEMENTARY";
								?>
								<div class="es" style="position: relative; width: 100%;background-color: #F1EFEF; border-radius: 3%; margin: auto; margin-top: 5%; margin-bottom: 5%; padding: 2%; opacity: 0.5;">	
									<a href="https://www.facebook.com/profile.php?id=100091551543349" target = "_blank"><img src="elem.png" width="100%"></a>
								</div>
								<?php
									echo "$elementary";
								?>
							</div>
							<div style="position: relative; width: 28%; margin: auto; padding-top: 3%;">
								<?php
									echo "HIGHSCHOOL";
								?>
								<div class="hs" style="position: relative; width: 100%; background-color: #F1EFEF; border-radius: 3%; margin: auto; margin-top: 5%; margin-bottom: 5%; padding: 2%; opacity: 0.5;">
									<a href="https://www.facebook.com/ctvs.shs" target = "_blank"><img src="hs.png" width="100%"></a>
								</div>
								<?php
									echo "$highSchool<br>";
									echo "<p style='font-size:1vw;'>$strand</p>";
								?>
							</div>
							<div style="position: relative; width: 28%; margin: auto;">
								<?php
									echo "COLLEGE";
								?>
								<div class="col" style="position: relative; width: 100%; background-color: #F1EFEF;border-radius: 3%; margin: auto; margin-top: 5%; margin-bottom: 5%; padding: 2%; opacity: 0.5;">
									<a href="https://thelewiscollege.edu.ph/" target = "_blank"><img src="col.png" width="100%"></a>
								</div>
								<?php
									echo "$college<br>";
									echo "<p style='font-size:1vw;'>$course</p>";
								?>
							</div>
						</div>
					</center>
				</div>
			</div>
		</div>
	</div>
</body>
</html>