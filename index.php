<?php

	// The user is redirected here from login.php.
session_start(); // Start the session.

	$page_title = 'Home';
	//This is the PHP include
	include ('includes/header.php');
?>
<div class="content">
	<div id="banner">
		<a href="linkPage.html" target="_blank">
			<img src="images/spacer.gif" width="100%" height="150" id="adBanner" border="0" alt="Ad Banner" />
		</a>
	</div>
	<div class="homegames">
		<h1 class="hometitle">
			Games
		</h1>
		<div class="gamebox">
			<div class="gamesection">
				<img class="gamesectionimage" src="images/Uncharted.png">
				<h2 class="gamesectiontitle">
					Uncharted Collection
				</h2>
				<h3 class="gamesectionprice">
					$79.99
				</h3>
				<div class="gamesectionbutton">
					<a href="unchartedcollection.php?pid=50">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/StarWarsBattlefront.png">
				<h2 class="gamesectiontitle">
					Star Wars Battlefront
				</h2>
				<h3 class="gamesectionprice">
					$79.99
				</h3>
				<div class="gamesectionbutton">
					<a href="unchartedcollection.php?pid=51">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/MarioKart8.png">
				<h2 class="gamesectiontitle">
					Mario Kart 8
				</h2>
				<h3 class="gamesectionprice">
					$64.99
				</h3>
				<div class="gamesectionbutton">
					<a href="unchartedcollection.php?pid=66">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/Destiny.png">
				<h2 class="gamesectiontitle">
					Destiny
				</h2>
				<h3 class="gamesectionprice">
					$79.99
				</h3>
				<div class="gamesectionbutton">
					<a href="unchartedcollection.php?pid=58">
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
	<div class="homegames">
		<h1 class="hometitle">
			Consoles
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
					<a href="unchartedcollection.php?pid=70">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/WiiU.png">
				<h2 class="gamesectiontitle">
					Wii U
				</h2>
				<h3 class="gamesectionprice">
					$299.99
				</h3>
				<div class="gamesectionbutton">
					<a href="unchartedcollection.php?pid=70">
						<button>
							<h3>
								Buy Now!
							</h3>
						</button>
					</a>
				</div>
			</div>
			<div class="gamesection">
				<img class="gamesectionimage" src="images/XBox1.png">
				<h2 class="gamesectiontitle">
					XBox One
				</h2>
				<h3 class="gamesectionprice">
					$449.99
				</h3>
				<div class="gamesectionbutton">
					<a href="unchartedcollection.php?pid=76">
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
					<a href="unchartedcollection.php?pid=77">
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