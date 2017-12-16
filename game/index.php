<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fjord&amp;Baelt</title>

	<meta name='viewport' content="width=device-width, initial-scale=1.0">
	<meta name='keywords' content="marine, center, marine center, seal, seals, dolphin, dolphins, whale, whales, crab, crabs, marine research center,">
	<meta name='description' content="Fjord and Baelt is a marine research center that wants to let you go through their findings. This game has the purpose to facilitate your learning as you are explorin the center and what it has to offer">
	<meta name='author' content="Fjord&Bael">

	<link rel="stylesheet" type="text/css" href="../css/prestyling.css">
	<link rel="stylesheet" type="text/css" href="../css/game.css">
</head>
<body>
	<div id="preloader">
		<img src="../assets/pre-loader.gif">
	</div>
	<div id="map-modal">
		<img src="../assets/close.png" id="close-map-btn">
		<br>
		<img src="../assets/center-map.png" id="center-map">
	</div>
	<main id="main-content-container">
		<section id="sub-quest-wrapper">
			<div id="sub-quest-headline">
				<a href="../" id="home-btn"><img src="../assets/home.png"></a>
				<h1>LET&#39;S MEET THE ANIMALS!</h1>
				<img src="../assets/map.png" id="open-map-btn">
			</div>
			<div id="sub-quests-container">
				<div class="sub-quest" data-val="0">
					<h2>ABIGALE THE<br> WHALE</h2>
					<img src="../assets/characters/abigale.png" class="character-image">
					<br>
					<img src="../assets/quest-btn.png" class="start-quest-btn btn" data-val="0">
				</div>
				<div class="sub-quest" data-val="1">
					<h2>AUSTINE THE<br> DOLPHINE</h2>
					<img src="../assets/characters/austin.png" class="character-image">
					<br>
					<img src="../assets/quest-btn.png" class="start-quest-btn btn" data-val="1">
				</div>
				<div class="sub-quest" data-val="2">
					<h2>LUCILLE THE<br> SEAL</h2>
					<img src="../assets/characters/lucille.png" class="character-image">
					<br>
					<img src="../assets/quest-btn.png" class="start-quest-btn btn" data-val="2">
				</div>
				<div class="sub-quest" data-val="3">
					<h2>JACK THE<br> CRAB</h2>
					<img src="../assets/characters/jack.png" class="character-image">
					<br>
					<img src="../assets/quest-btn.png" class="start-quest-btn btn" data-val="3">
				</div>
			</div>
		</section>
		<section id="sub-quest-content">
			<div id="sub-quest-header">
				<div id="sub-quest-header-content">
					<h1 id="quest-name">{{ quest name }}</h1>
					<br>
					<p id="quest-headline">{{ Headline }}</p>
				</div>
				<div id="sub-quest-header-image">
					<img id="sub-quest-image" class="center" src="#">	
				</div>
			</div>
			<br>
			<div id="quest-question">
				<div id="quest-question-content">
					<h2>Question <span id="question-number">{{ qnumber }}</span>:</h2>
					<br>
					<p id="question">{{ Question }}</p>
					<br>
					<br>
					<div id="answers">
						<h3 class="answers-value btn answer-btn">{{ answer }}</h3>
						<h3 class="answers-value btn answer-btn">{{ answer }}</h3>
						<h3 class="answers-value btn answer-btn">{{ answer }}</h3>
					</div>
				</div>
			</div>
			<img class="btn" id="back-btn" src="../assets/back-btn.png">
		</section>
		<section id="congrats">
			<div class="congrats-col" id="tintin-congrats-wrapper">
				<img src="../assets/tintin.png" id="tintin-congrats">
			</div>
			<div class="congrats-col" id="congrats-text">
				<h1>Congratulation!</h1>
				<br>
				<h3 id="diploma-congrats-text">You finished a sub-quest! Amazing! Less problems
					left for me to solve, you are such a great help!
					<br>
					<br>
					<span id="player-name">{{ Player name }}</span>, Now that you have finished one of the quests, you have the options to continue or claim the diploma that we have made for you.
					<br>
					<br>
					I hope you want to continue, I still need you to find out more about the animals.
				</h3>
				<h2><br>Shall we continue?</h2>
				<img src="../assets/yes.png" class="btn" id="continue-btn">
				<img src="../assets/no.png" class="btn" id="exit-btn"></a>
			</div>
		</section>
	</main>
	<!-- playerName variable declared here in order for the other .js files to have access to it -->
	<script type="text/javascript"> var playerName = "<?php echo $_GET['player']; ?>"; </script>
	<script type="text/javascript" src="../js/game.js"></script>
</body>
</html>