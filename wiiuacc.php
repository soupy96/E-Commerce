<?php

	// The user is redirected here from login.php.
session_start(); // Start the session.

	$page_title = 'Wii U Accessories';
	//This is the PHP include
	include ('includes/header.php');
?>
<div class="content">
	<div class="homegames">
		<h1 class="hometitle">
			Wii U Accessories
		</h1>
		<div class="gamebox">
			<div class="gamesection">
				<img class="gamesectionimage" src="images/WiiNunchuck.png">
				<h2 class="gamesectiontitle">
					Wii U Nunchuck
				</h2>
				<h3 class="gamesectionprice">
					$24.99
				</h3>
				<div class="gamesectionbutton">
					<a href="wiiNunchuck.php">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/WiiPeachController.png">
				<h2 class="gamesectiontitle">
					Wii U Peach Controller
				</h2>
				<h3 class="gamesectionprice">
					$47.99
				</h3>
				<div class="gamesectionbutton">
					<a href="wiiControllerpeach.php">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/WiiUGamecubeAdapter.png">
				<h2 class="gamesectiontitle">
					Wii U Gamecube Adapter
				</h2>
				<h3 class="gamesectionprice">
					$24.99
				</h3>
				<div class="gamesectionbutton">
					<a href="wiiUgamecubeadapter.php">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/WiiUController.png">
				<h2 class="gamesectiontitle">
					Wii U Gamepad
				</h2>
				<h3 class="gamesectionprice">
					$24.99
				</h3>
				<div class="gamesectionbutton">
					<a href="wiiUcontroller.php">
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
				<img class="gamesectionimage" src="images/WiiControllerWhite.png">
				<h2 class="gamesectiontitle">
					Wii U Remote
				</h2>
				<h3 class="gamesectionprice">
					$47.99
				</h3>
				<div class="gamesectionbutton">
					<a href="wiiController.php">
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