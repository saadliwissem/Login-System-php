<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		bride house
	</title>
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" contant="width-device-width,initial-scale=1.0">
	
</head>
<body>
<header>
<div class="navbar">
		<ul>
			<li>
				<a href="index.php">home</a>
			</li>
			
			<?php 
				if(isset($_SESSION["useruid"])){
					echo "<li>
					<a href='profile.php'>profile</a>
				</li>";
				echo "<li>
					<a href='includes/logout.inc.php'>logout</a>
				</li>";
				}
				else{
					echo "<li>
					<a href='signup.php'>sign up</a>
				</li>";
				echo "<li>
					<a href='login.php'>login</a>
				</li>";
				} 
			?>
		</ul>
</div>
</header>