// 
// 
// 
// NOTE***
// if you see any errors around "() => { code... }" it is because that is ES6 syntax
// nothing to worry about there, just some new stuff that has not been standardized yet
// 
// 
// 
///////////////////////////////////////////////////////////////////////////////////////

// HELPER FUNCTION

// this function simulates the jquery '$' sign selector method
function $(element) {
	if (element[0] === '#') {
		return document.querySelector(element);
	}
	return document.querySelectorAll(element);
}

// HELPER FUNCTION END

// PRELOADER
window.onload = () => {
	$('#preloader').style.opacity = 0;
		setTimeout( () => {
			$('#preloader').style.display = 'none';
		}, 300);
};

// Animates and removes the intro screen
$('#start-adventure-btn').onclick = () => {
	$('#intro-screen').style.opacity = 0;
	setTimeout( () => {
		$('#intro-screen').style.marginTop = '-100vh';	
	}, 1000);
};

// Displays message before actually starting the game subquests
$('#start1-btn').onclick = () => {
	
	if ($('#player-name').value === "") {
		$('#player-name-error').innerHTML = 'I need to know your name.<br>';
		$('#player-name-error').style.color = 'red';
		return;
	}

	$('#welcome-text').style.opacity = 0;
		setTimeout( () => {
			$('#welcome-text').innerHTML = `
				<h1>NICE TO MEET YOU ` + $('#player-name').value.toUpperCase() + `</h1>
				<br><br>
				<h3>As I told you before, I need help with the animals, there is missing information about them. Could you go around the center and see what you can find about them?<br><br>
				Whenever you feel lost, click on the location icon in the top right, that should guide you where to go. You will see, it is not a big place but there is plenty to see around.<br><br> 
				there are a few hotspots for you to visit that would prove useful for the quests so let&#39;s get into this! Aye aye!<h3>
				<br>
				<br>
				<a href="game/?player=` + $('#player-name').value + `"><img src="assets/to-quests.png" class="start-btn btn" id="start2-btn"></a>
			`;
			$('#welcome-text').style.opacity = 1;
		}, 300);
};

$('#exit-btn').onclick = () => {
	$('#preloader').style.display = 'block';
	$('#preloader').style.opacity = 1;
	$('#exit-btn').style.display = 'none';

	window.location.assign('http://www.fjordbaelt.dk/');

};





