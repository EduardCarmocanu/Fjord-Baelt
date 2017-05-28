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

// this function simulates the jquery '$' sign selector method and it's a lite version of it
function $(element) {
	if (element[0] === '#') {
		return document.querySelector(element);
	}
	return document.querySelectorAll(element);
}
// HELPER FUNCTION END

// PRELOADER
// while the window is loading the preloader GIF is displayed
window.onload = () => {
	$('#preloader').style.opacity = 0;
		setTimeout( () => {
			$('#preloader').style.display = 'none';
		}, 300);
};

// PRELOADER END


//////////////////////////////////////////////////////
// GLOBAL VARIABLES ON WICH THE FUNCTIONS DEPEND ON //
//////////////////////////////////////////////////////

	// creating a global variable for the json result
var result,
	// Stores the player name
	// Keeps track of current quest
	currentQuestIndex,
	// Keeps track of number of completed quests
	completedQuestsNumber = 0,
	// keeps count of which question the game is on
	questionIndex = 0;

///////////////////////////////////////////////
// CORE FUNCTION THAT DRIVES THE APPLICATION //
///////////////////////////////////////////////

function getSubquest(q) {
	// instantiating a XHR request
	xhr = new XMLHttpRequest();

	// Oppening stream through GET and sets up the query
	xhr.open('GET', '../functions/subquest_content_deliverer.php?quest=' + q, true);
	// Setting header in order to be able to recognize this as a XHR request
	xhr.setRequestHeader('X-requested-With', 'XMLHttpRequest');

	// Binds to the state change event of the XHR request
	xhr.onreadystatechange = () => {
		if (xhr.readyState == 4 && xhr.status == 200) {

			// parses the json recieved
			result = JSON.parse(xhr.responseText);
			// Assigns the needed json result to the global variable
			result = result[q];
			// Sets the header of the question
			setQuestHeader(result);
			// The question index
			questionIndex = 0;
			// Sets the content of the questions
			setQuestQuestion(result);
			// Animates in order to reach the questions
			startQuest();
			// Tracks the current quest
			currentQuestIndex = q;
		}
	};
	// SEND XMLHttpRequest request5
	xhr.send();
}

// sets the header of the question
function setQuestHeader() {
	$('#quest-name').innerHTML = result.name;
	$('#quest-headline').innerHTML = result.headline;
	$('#sub-quest-image').src = result.img;
}

// sets the content of the questions
function setQuestQuestion() {
	$('#question').innerHTML = result.questions[questionIndex].question;
	$('#question-number').innerHTML = questionIndex + 1;

	// Loops through the answers and displays them
	for (var i = 0;  i < 3; i++) {
		$('.answers-value')[i].innerHTML = result.questions[questionIndex].answers[i];
	}
}

// Animates the screen and moves it to the questions slide
function startQuest () {
	$('#sub-quest-wrapper').style.opacity = 0;
	setTimeout( () => {
		$('#sub-quest-wrapper').style.marginTop = '-100vh';	
	}, 1000);
}

function setTrigger () {

	// if index matches the player is taken to the quests without reasigning data
	// Player stais on the same question that he started from
	if (currentQuestIndex == this.getAttribute('data-val')) {
		startQuest();
		return;
	}
	// sends the question index to the core function
	getSubquest(this.getAttribute('data-val'));
}
// Loops through the start quest buttons and sets trigger function on each
for (var i = 0; i < 4; i++) {
	$('.sub-quest')[i].onclick = setTrigger;
}

// Goes through the questions
function nextQuestion() {

	// Checks for corrent answer in the question
	if (result.questions[questionIndex].corectAnswer === this.innerHTML) {

		// increments the question index
		questionIndex++;

		// fades out the question
		$('#quest-question-content').style.opacity = 0;

		// delays the appearance of the question until the previous animation is done and sets the content of the following one then displays it
		setTimeout(() => {
			// sets the new questionIndex
			setQuestQuestion(result);
			// fade back the question
			$('#quest-question-content').style.opacity = 1;
		}, 300);
	}
	// checks if the player has completed all the questions in the quest
	if (questionIndex === result.questions.length) {
			// fade back the question
			$('#quest-question-content').style.opacity = 1;
			// runs the congrats function
			congrats();
	}
}
// binds nextQuestion function to answer buttons
for (var i = 0; i < 3; i++) {
	$('.answer-btn')[i].onclick = nextQuestion;
}

// let's the player abbandon the quest
function backToQuestPanel () {
	$('#sub-quest-wrapper').style.marginTop = '0';
	$('#sub-quest-wrapper').style.opacity = 1;	
}
$('#back-btn').onclick = backToQuestPanel;


function congrats() {

	// Increments the number of complete quests
	completedQuestsNumber++;

	// Changes the image of the quest in order to show that it has been completed
	$('.character-image')[currentQuestIndex].setAttribute('src', '../assets/done.png');

	// removes the eventlistener from the completed quest
	$('.sub-quest')[currentQuestIndex].onclick = '';
	
	// Remove the start quest button in order to prevent the user to restart a completed quest
	$('.start-quest-btn')[currentQuestIndex].removeAttribute('src');

	setTimeout(() => {
		$('#sub-quest-content').style.marginTop = '-100vh';
	}, 1000);

	// Add the player name in the congrats text
	$('#player-name').innerHTML = playerName;

	// fades the quest content
	$('#sub-quest-content').style.opacity = 0;

	// waits for the animation to be done before checking if all the quests have been completed
	setTimeout(() => {
		if (completedQuestsNumber > 3) {
			diploma();
		}
	}, 1000);

}

// Animates the screen in order to go back to the quest selection pannel
function continueGame () {
	$('#sub-quest-wrapper').style.marginTop = 0;
	$('#sub-quest-wrapper').style.opacity = 1;
	$('#sub-quest-content').style.marginTop = 0;

	// delays the display of the question content 
	setTimeout( () => { 
		$('#sub-quest-content').style.opacity = 1; 
	}, 1000);
}
$('#continue-btn').onclick = continueGame;

// Goes to congratulations screen and offer the player the incomplete diploma;
function exitGame () {
	$('#congrats-text').style.opacity = 0;
	setTimeout( () => {
		$('#congrats-text').innerHTML = `
			<h1>I still appreciate your help</h1>
				<br>
				<h3 id="diploma-congrats-text">Even though you don&#39;t want to continue you have been of great help
					<br>
					<br>
					<span id="player-name">` + playerName + `</span>, we made a diploma for you so you can
					show it to everyone (and be very proud) how you
					helped the animals in need!
					<br>
					<br>
 					Well done! And i hope i will see you again in the near future and you will joing me in 
 					my quest about the marine kingdom.
				</h3>
				<br>
				<br>
				<a href="../diploma?player=` + playerName + `"><img class="btn" src="../assets/claim-diploma.png"></a>
			`;

		$('#congrats-text').style.opacity = 1;
	}, 500);
}
$('#exit-btn').onclick = exitGame;


//////////////////////////////////////////////////////////////////////////
// FUNCTIONS THAT CREATES THE DIPLOMA FOR ONCE THE QUESTS ARE COMPLETED //
// OR THE PLAYER REFUSES TO PLAY ANYLONGER ///////////////////////////////
//////////////////////////////////////////////////////////////////////////

function diploma() {
	// Makes the not visible
	$('#sub-quest-wrapper').style.opacity = 0;
	$('#sub-quest-content').style.opacity = 0;

	// sets text of congratulations slide to the final one
	$('#congrats-text').innerHTML = `
		<h1>Congratulation!</h1>
				<br>
				<h3 id="diploma-congrats-text">You have finished all the quests!
					<br>
					<br>
					<span id="player-name">{{ Player name }}</span>, we made a diploma for you so you can
					show it to everyone (and be very proud) how you
					helped the animals in need!
					<br>
					<br>
 					Well done! I knew you
					were special and you could do it from the beginning!
					You can just save this or go to the helpdesk to
					print it out for you!
				</h3>
				<br>
				<br>
				<a href="../diploma?player=` + playerName + `"><img class="btn" src="../assets/claim-diploma.png"></a>
	`;
	$('#player-name').innerHTML = playerName;

	setTimeout( () => {
		$('#sub-quest-wrapper').style.marginTop = '-100vh'; 
	}, 1000);
}

function displayMap() {
	$('#map-modal').style.display = 'block';

	// setting timeout in order to have the fade in annimation
	// This is just a fix
	setTimeout( () => {
		$('#map-modal').style.opacity = 1;
	}, 0.1)
}
$('#open-map-btn').onclick = displayMap;

function closeMap () {
	$('#map-modal').style.opacity = 0;
	setTimeout( () => {
		$('#map-modal').style.display = 'none';
	}, 300);
}
$('#close-map-btn').onclick = closeMap;