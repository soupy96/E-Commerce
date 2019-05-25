<?php

	// The user is redirected here from login.php.
session_start(); // Start the session.

	$page_title = 'Xbox One Console';
	//This is the PHP include
	include ('includes/header.php');
?>
<div class="content">
	<div class="homegames">
		<h1 class="hometitle">
			Xbox One Consoles
		</h1>
		<div class="gamebox">
			<div class="gamesection">
				<img class="gamesectionimage" src="images/XBox1.png">
				<h2 class="gamesectiontitle">
					Xbox One
				</h2>
				<h3 class="gamesectionprice">
					$449.99
				</h3>
				<div class="gamesectionbutton">
					<a href="xboxone.php">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/XboxFarcry4bundle.png">
				<h2 class="gamesectiontitle">
					Xbox One Farcry 4 Bundle
				</h2>
				<h3 class="gamesectionprice">
					$469.99
				</h3>
				<div class="gamesectionbutton">
					<a href="xboxonefarcrybundle.php">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/Xboxhalo5bundle.png">
				<h2 class="gamesectiontitle">
					Xbox One Halo 5 Bundle
				</h2>
				<h3 class="gamesectionprice">
					$429.99
				</h3>
				<div class="gamesectionbutton">
					<a href="xboxonehalo5bundle.php">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/XboxDestinyBundle.png">
				<h2 class="gamesectiontitle">
					Xbox One Destiny Bundle
				</h2>
				<h3 class="gamesectionprice">
					$429.99
				</h3>
				<div class="gamesectionbutton">
					<a href="xboxonedestinybundle.php">
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
				<img class="gamesectionimage" src="images/XboxMadden2016bundle.png">
				<h2 class="gamesectiontitle">
					Xbox One Madden 2016 Bundle
				</h2>
				<h3 class="gamesectionprice">
					$429.99
				</h3>
				<div class="gamesectionbutton">
					<a href="xboxonemadden2016bundle.php">
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