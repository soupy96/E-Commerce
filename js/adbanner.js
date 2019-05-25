//array of banner images
var adImages = new Array("images/xboxbundle.png","images/ps4bundle.png","images/wiiubundle.png");
var thisAd = 0;

//random ad every time
function randomAd(){
	thisAd = Math.floor((Math.random() * adImages.length));
	document.getElementById("adBanner").src = adImages[thisAd];
	addLinks();
}

//look for a tags and set up as links to external ad sites
function addLinks() {
	if (document.getElementById("adBanner").parentNode.tagName == "A") {
		document.getElementById("adBanner").parentNode.onclick = newLocation;
	}
	rotate();
}

//array of ad links to display when ad is clicked
function newLocation() {
	var adURL = new Array("xboxoneconsole.php","ps4console.php","wiiuconsole.php");
	document.location.href = "http://www." + adURL[thisAd];
	return false;
}

//rotate banner images at 5 second intervals
function rotate() {
	thisAd++;
	if (thisAd == adImages.length) {
		thisAd = 0;
	}
	document.getElementById("adBanner").src = adImages[thisAd];

	setTimeout(rotate, 3 * 1000);
}

//start the ad banner when page loads
window.onload = randomAd;