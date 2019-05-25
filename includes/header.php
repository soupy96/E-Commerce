<!DOCTYPE html>
<html>
		<head>
			<title>
				<?php echo $page_title; ?>
			</title>
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   		<script src="js/script.js"></script>
         <script src="js/adbanner.js" ></script>
		</head>
	<body>
	<div class="wrapper">
		<div class="logologin">
         <a class="biggerlogo" href="index.php">
			   <img class="logo" src="images/black_colored_buttons.png">
         </a>
			<div class="toplinks">
				<?php 
                     if (isset($_SESSION['cust_id'])) {
                        echo '<a href="logout.php">Logout | </a>';
                     }
                     else {
                        echo '<a href="login.php">Login | </a>';
                     } ?>
				<a href="createaccount.php">
					Create Account
				</a>
			</div>
         <div class="youare">
            <?php
                  if (isset($_SESSION['cust_id'])) {
                   echo "<p class='hereyouare'>You are logged in as {$_SESSION['cust_fname']}!</p>";
                  }
            ?>
         </div>
		</div>
		<div id='cssmenu'>
			<ul>
   				<li class='active has-sub'>
   					<a href='ps4games.php'>
   						<span>
   							Playstation
   						</span>
   					</a>
   				</li>
   				<li class='active has-sub'>
   					<a href='xboxonegames.php'>
   						<span>
   							Xbox
   						</span>
   					</a>
   				</li>
   				<li class='active has-sub'>
   					<a href='wiiugames.php'>
   						<span>
   							Wii U
   						</span>
   					</a>
   				</li>
   				<li class='active has-sub'>
   					<a href='viewcart.php'>
   						<span>
   							Cart
   						</span>
   					</a>
   				</li>
			</ul>
		</div>