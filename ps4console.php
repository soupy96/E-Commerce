<?php

	// The user is redirected here from login.php.
session_start(); // Start the session.

	$page_title = 'PS4 Console';
	//This is the PHP include
	include ('includes/header.php');
?>
<div class="content">
	<div class="homegames">
		<h1 class="hometitle">
			PS4 Consoles
		</h1>
		<div class="gamebox">
			<div class="gamesection">
				<img class="gamesectionimage" src="images/PS4.png">
				<h2 class="gamesectiontitle">
					Playstation 4
				</h2>
				<h3 class="gamesectionprice">
					$369.99
				</h3>
				<div class="gamesectionbutton">
					<a href="ps4.php">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/PS4Batmanbundle.png">
				<h2 class="gamesectiontitle">
					PS4 Batman Bundle
				</h2>
				<h3 class="gamesectionprice">
					$429.99
				</h3>
				<div class="gamesectionbutton">
					<a href="ps4batmanbundle.php">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/PS4Dragonagebundle.png">
				<h2 class="gamesectiontitle">
					PS4 Dragonage Inquisition Bundle
				</h2>
				<h3 class="gamesectionprice">
					$429.99
				</h3>
				<div class="gamesectionbutton">
					<a href="ps4dragonagebundle.php">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/PS4ElderScrollsbundle.png">
				<h2 class="gamesectiontitle">
					PS4 Elder Scrolls Online Bundle
				</h2>
				<h3 class="gamesectionprice">
					$429.99
				</h3>
				<div class="gamesectionbutton">
					<a href="ps4elderscrollsbundle.php">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
		</div>
		<div class="gamebox">
			<div class="gamesection">
				<img class="gamesectionimage" src="images/PS4Falloutbundle.png">
				<h2 class="gamesectiontitle">
					PS4 Fallout 4 Bundle
				</h2>
				<h3 class="gamesectionprice">
					$429.99
				</h3>
				<div class="gamesectionbutton">
					<a href="ps4falloutbundle.php">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/PS4GTA5bundle.png">
				<h2 class="gamesectiontitle">
					PS4 Grand Theft Auto 5 Bundle
				</h2>
				<h3 class="gamesectionprice">
					$429.99
				</h3>
				<div class="gamesectionbutton">
					<a href="ps4gta5bundle.php">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
	//This the PHP include for the footer
	include ('includes/footer.php');
?>