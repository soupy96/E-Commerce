<?php
	$page_title = 'Halo 5: Guardians';
	//This is the PHP include
	include ('includes/header.php');
?>
<div class="content">
	<div class="productbox">
		<img class="productimage" src="images/Halo5.png">
		<div class="productinfo">
			<h1 class="objecttitle">
				Halo 5 Guardians
			</h1>
			<h2 class="objectprice">
				$79.99
			</h2>
			<h2 class="objectdev">
				by: Microsoft
			</h2>
			<img class="esrb" src="images/teen.png">
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
		A mysterious and unstoppable force threatens the galaxy, the Master Chief is missing and his loyalty questioned. Experience the most dramatic Halo story to date in a 4-player cooperative epic that spans three worlds. Challenge friends and rivals in new multiplayer modes: Warzone, massive 24-player battles, and Arena, pure 4-vs-4 competitive combat.
	</p>
</div>
<?php 
	//This the PHP include for the footer
	include ('includes/footer.php');
?>