<?php

	// The user is redirected here from login.php.
session_start(); // Start the session.

	$page_title = 'Xbox One Accessories';
	//This is the PHP include
	include ('includes/header.php');
?>
<div class="content">
	<div class="homegames">
		<h1 class="hometitle">
			Xbox One Accessories
		</h1>
		<div class="gamebox">
			<div class="gamesection">
				<img class="gamesectionimage" src="images/XboxBlackController.png">
				<h2 class="gamesectiontitle">
					Xbox One Wireless Controller
				</h2>
				<h3 class="gamesectionprice">
					$59.99
				</h3>
				<div class="gamesectionbutton">
					<a href="xboxonecontroller.php">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/XboxBlueHaloController.png">
				<h2 class="gamesectiontitle">
					Xbox One Blue Halo Wireless Controller
				</h2>
				<h3 class="gamesectionprice">
					$59.99
				</h3>
				<div class="gamesectionbutton">
					<a href="xboxonebluecontroller.php">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/XboxCovertForcesController.png">
				<h2 class="gamesectiontitle">
					Xbox One Covert Forces Wireless Controller
				</h2>
				<h3 class="gamesectionprice">
					$59.99
				</h3>
				<div class="gamesectionbutton">
					<a href="xboxoneforcescontroller.php">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/XboxHaloController.png">
				<h2 class="gamesectiontitle">
					Xbox One Traditional Halo Wireless Controller
				</h2>
				<h3 class="gamesectionprice">
					$59.99
				</h3>
				<div class="gamesectionbutton">
					<a href="xboxonehalocontroller.php">
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
				<img class="gamesectionimage" src="images/XboxHeadset.png">
				<h2 class="gamesectiontitle">
					Xbox One Stereo Headset
				</h2>
				<h3 class="gamesectionprice">
					$29.99
				</h3>
				<div class="gamesectionbutton">
					<a href="xboxoneheadset.php">
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