<?php

	// The user is redirected here from login.php.
session_start(); // Start the session.

	$page_title = 'Wii U Console';
	//This is the PHP include
	include ('includes/header.php');
?>
<div class="content">
	<div class="homegames">
		<h1 class="hometitle">
			Wii U Consoles
		</h1>
		<div class="gamebox">
			<div class="gamesection">
				<img class="gamesectionimage" src="images/WiiU.png">
				<h2 class="gamesectiontitle">
					Wii U
				</h2>
				<h3 class="gamesectionprice">
					$299.99
				</h3>
				<div class="gamesectionbutton">
					<a href="wiiu.php">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/WiiUHyruleWarriorsbundle.png">
				<h2 class="gamesectiontitle">
					Wii U Hyrule Warriors Bundle
				</h2>
				<h3 class="gamesectionprice">
					$329.99
				</h3>
				<div class="gamesectionbutton">
					<a href="wiiuhyrulewarriorsbundle.php">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/WiiUJustDancebundle.png">
				<h2 class="gamesectiontitle">
					Wii U Just Dance Bundle
				</h2>
				<h3 class="gamesectionprice">
					$329.99
				</h3>
				<div class="gamesectionbutton">
					<a href="wiiujustdancebundle.php">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/WiiUMarioKartbundle.png">
				<h2 class="gamesectiontitle">
					Wii U Mario Kart 8
				</h2>
				<h3 class="gamesectionprice">
					$329.99
				</h3>
				<div class="gamesectionbutton">
					<a href="wiiumariokart8.php">
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
				<img class="gamesectionimage" src="images/WiiUMonsterHunterbundle.png">
				<h2 class="gamesectiontitle">
					Wii U Monster Hunter Bundle
				</h2>
				<h3 class="gamesectionprice">
					$329.99
				</h3>
				<div class="gamesectionbutton">
					<a href="wiiumosterhunterbundle.php">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/WiiUNintendoLandbundle.png">
				<h2 class="gamesectiontitle">
					Wii U Nintendo Land Bundle
				</h2>
				<h3 class="gamesectionprice">
					$329.99
				</h3>
				<div class="gamesectionbutton">
					<a href="wiiunintendolandbundle.php">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/WiiUSuperMario3DWorldbundle.png">
				<h2 class="gamesectiontitle">
					Wii U Super Mario 3D World
				</h2>
				<h3 class="gamesectionprice">
					$329.99
				</h3>
				<div class="gamesectionbutton">
					<a href="wiiusupermario3dworld.php">
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