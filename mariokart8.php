<?php
	$page_title = 'Mario Kart 8';
	//This is the PHP include
	include ('includes/header.php');
?>
<div class="content">
	<div class="productbox">
		<img class="productimage" src="images/MarioKart8.png">
		<div class="productinfo">
			<h1 class="objecttitle">
				Mario Kart 8
			</h1>
			<h2 class="objectprice">
				$64.99
			</h2>
			<h2 class="objectdev">
				by: Nintendo of America
			</h2>
			<img class="esrb" src="images/everyone.png">
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
		For the first time, Nintendo's Mario Kart franchise comes to the Wii U console in full HD, introducing new racing circuit designs and anti-gravity karts that will have players driving upside down. Players will also enjoy a variety of series-favorite features, including the return of 12-player online competitive play, hang-gliders, underwater racing and motorbikes.
	</p>
</div>
<?php 
	//This the PHP include for the footer
	include ('includes/footer.php');
?>