<?php
	$page_title = 'Star Wars Battlefront';
	//This is the PHP include
	include ('includes/header.php');
?>
<div class="content">
	<div class="productbox">
		<img class="productimage" src="images/StarWarsBattlefront.png">
		<div class="productinfo">
			<h1 class="objecttitle">
				Star Wars Battlefront
			</h1>
			<h2 class="objectprice">
				$79.99
			</h2>
			<h2 class="objectdev">
				by: Electronic Arts
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
		Feeling the ominous thud of an AT-AT stomping down on the frozen tundra of Hoth. Rebel forces firing blasters as Imperial speeder bikes zip through the lush forests of Endor. Intense dogfights between squadrons of X-wings and TIE fighters filling the skies. Immerse yourself in the epic Star Wars battles you've always dreamed of and create new heroic moments of your own in Star Wars Battlefront.
	</p>
</div>
<?php 
	//This the PHP include for the footer
	include ('includes/footer.php');
?>