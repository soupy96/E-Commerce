<?php

	// The user is redirected here from login.php.
session_start(); // Start the session.

	$page_title = 'PS4 Accessories';
	//This is the PHP include
	include ('includes/header.php');
?>
<div class="content">
	<div class="homegames">
		<h1 class="hometitle">
			PS4 Accessories
		</h1>
		<div class="gamebox">
			<div class="gamesection">
				<img class="gamesectionimage" src="images/PS4Chargingdoc.png">
				<h2 class="gamesectiontitle">
					PS4 Controller Charging Dock
				</h2>
				<h3 class="gamesectionprice">
					$29.99
				</h3>
				<div class="gamesectionbutton">
					<a href="ps4chargindock.php">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/PS4Controller.png">
				<h2 class="gamesectiontitle">
					DualShock 4 Wireless Controller Black
				</h2>
				<h3 class="gamesectionprice">
					$74.99
				</h3>
				<div class="gamesectionbutton">
					<a href="ps4controller.php">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/PS4ControllerCamo.png">
				<h2 class="gamesectiontitle">
					DualShock 4 Wireless Controller Urban Camouflage
				</h2>
				<h3 class="gamesectionprice">
					$74.99
				</h3>
				<div class="gamesectionbutton">
					<a href="ps4armycamocontroller.php">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/PS4Headphones.png">
				<h2 class="gamesectiontitle">
					The Official PS4 Wireless Stereo Headset
				</h2>
				<h3 class="gamesectionprice">
					$59.99
				</h3>
				<div class="gamesectionbutton">
					<a href="ps4overearheadset.php">
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
				<img class="gamesectionimage" src="images/PS4InEarHeadphones.png">
				<h2 class="gamesectiontitle">
					The Official PS4 Wired In-Ear Headset
				</h2>
				<h3 class="gamesectionprice">
					$14.99
				</h3>
				<div class="gamesectionbutton">
					<a href="ps4inearheadphones.php">
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