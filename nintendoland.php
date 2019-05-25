<?php
	$page_title = 'Nintendo Land';
	//This is the PHP include
	include ('includes/header.php');
?>
<div class="content">
	<div class="productbox">
		<img class="productimage" src="images/NintendoLand.png">
		<div class="productinfo">
			<h1 class="objecttitle">
				Nintendo Land
			</h1>
			<h2 class="objectprice">
				$64.99
			</h2>
			<h2 class="objectdev">
				by: Nintendo of America
			</h2>
			<img class="esrb" src="images/everyoneten.png">
			<div id="addtocartbutton">
				<button>
					<h3>
						Add to Cart
					</h3>
				</button>
			</div>
		</div>
	</div>
	<h1 class="hometitle">
		Description
	</h1>
	<p class="productdescription">
		Explore new ways to play with the WiiU Gamepad! Visit a theme park based on Nintendos greatest worlds. From solo games like Yoshi's Fruit Cart and Captain Falcon's Twister Race, to teamplayer games like Metroid Blast or The Legend of Zelda: Battle Quest.
	</p>
</div>
<?php 
	//This the PHP include for the footer
	include ('includes/footer.php');
?>