<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fjord&amp;Baelt</title>

	<meta name='viewport' content="width=device-width, initial-scale=1.0">
	<meta name='keywords' content="marine, center, marine center, seal, seals, dolphin, dolphins, whale, whales, crab, crabs, marine research center,">
	<meta name='description' content="Fjord and Baelt is a marine research center that wants to let you go through their findings. This game has the purpose to facilitate your learning as you are explorin the center and what it has to offer">
	<meta name='author' content="Fjord&Bael">
	
	<link rel="stylesheet" type="text/css" href="css/prestyling.css">
	<link rel="stylesheet" type="text/css" href="css/intro.css">
</head>
<body>
	<div id="preloader">
		<img src="assets/pre-loader.gif">
	</div>
	<main id="main-content-container">
		<div class="intro-slide" id="intro-screen">
			<div id="intro-screen-controls">
				<h2><img src="assets/seaquest-title.png"></h2><br>
				<img class="intro-menu-btn btn" id="start-adventure-btn" src="assets/start-adventure.png">
				<img class="intro-menu-btn btn" id="exit-btn" src="assets/exit.png">
			</div>
		</div>
		<div class="intro-slide" id="welcome-message-container">
			<div class="welcome-message-col" id="tintin-welcome-image-container">
				<img src="assets/tintin.png" id="tintin-welcome">
			</div>
			<div class="welcome-message-col" id="welcome-text">
				<h1>WELCOME, WELCOME YOU MIGHTY!</h1>
				<br>
				<h3>I am Tintin, a Marine Researcher from the center Fjord&amp;Baelt. My job is to take care of my friends, the crabs, the whale, the seals and the dolphin, and study their environment.
				<br>
				But … today I need your help. 
				I want you to go on a big quest for me! I lost a lot of information about my friends, and I need your help to get back them. I would like to know what is your name young one.
				</h3>
				<br>
				<br>
				<label for="player-name">MY NAME IS:</label>
				<br>
				<br>
				<label for="player-name" id="player-name-error"></label>
				<input type="text" name="p_name" id="player-name">
				<br>
				<br>
				<img src="assets/go.png" class="start-btn btn" id="start1-btn">
			</div>
		</div>
		<div id="logo-wrapper">
			<img src="assets/logo.png" id="logo">
		</div>
	</main>
	<script type="text/javascript" src="js/intro.js"></script>
</body>
</html>