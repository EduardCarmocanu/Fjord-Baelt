<?php

#
# Those functions are only for setting up the quests as json
# They have been used in order to not hand write the json into the subquests.txt
#

// function getQuests () {
// 	$data = file_get_contents('../game/subquests.txt');
// 	return json_decode($data, 1);
// }

// function setQuests ($quests) {
// 	$data = json_encode($quests);
// 	file_put_contents('../game/subquests.txt', $data);
// }


// function saveQuests ($name, $headline, $questions, $img) {

// 	$quests = getQuests();

// 	$quests[] = [
// 		'name' => $name,
// 		'headline' => $headline,
// 		'questions' => $questions,
// 		'img' => $img
// 	];


// 	setQuests($quests);
// }


// saveQuests(
// 	"Abigale the whale!",
// 	"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod perspiciatis voluptatum eveniet, cupiditate esse aliquid cum eum ducimus harum officia beatae repudiandae incidunt numquam placeat eligendi ipsa tempora quas facere!",

// 	[
// 		['question' => 'asdLorem ipsum dolor sit amet, consectetur adipisicing elit. Alias suscipit cumque veniam?', 
// 		'answers' => [
// 				'A. 4', 
// 				'B. 5', 
// 				'C. 6'
// 			],
// 		'corectAnswer' => 'C. 6'
// 		],
// 		['question' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias suscipit cumque veniam?', 
// 		'answers' => [
// 				'A. 4', 
// 				'B. 5', 
// 				'C. 6'
// 			],
// 		'corectAnswer' => 'C. 6'
// 		],
// 		['question' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias suscipit cumque veniam?', 
// 		'answers' => [
// 				'A. 4', 
// 				'B. 5', 
// 				'C. 6'
// 			],
// 		'corectAnswer' => 'C. 6'
// 		],
// 	],
// 	"../assets/characters/abigale.png"
// );
// saveQuests(
// 	"Austin the Dolphine!",
// 	"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod perspiciatis voluptatum eveniet, cupiditate esse aliquid cum eum ducimus harum officia beatae repudiandae incidunt numquam placeat eligendi ipsa tempora quas facere!",

// 	[
// 		['question' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias suscipit cumque veniam?', 
// 		'answers' => [
// 				'A. 4', 
// 				'B. 5', 
// 				'C. 6'
// 			],
// 		'corectAnswer' => 'C. 6'
// 		],
// 		['question' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias suscipit cumque veniam?', 
// 		'answers' => [
// 				'A. 4', 
// 				'B. 5', 
// 				'C. 6'
// 			],
// 		'corectAnswer' => 'C. 6'
// 		],
// 		['question' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias suscipit cumque veniam?', 
// 		'answers' => [
// 				'A. 4', 
// 				'B. 5', 
// 				'C. 6'
// 			],
// 		'corectAnswer' => 'C. 6'
// 		],
// 	],
// 	"../assets/characters/austin.png"
// );
// saveQuests(
// 	"Lucille the Seal!",
// 	"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod perspiciatis voluptatum eveniet, cupiditate esse aliquid cum eum ducimus harum officia beatae repudiandae incidunt numquam placeat eligendi ipsa tempora quas facere!",

// 	[
// 		['question' => 'asdLorem ipsum dolor sit amet, consectetur adipisicing elit. Alias suscipit cumque veniam?', 
// 		'answers' => [
// 				'A. 4', 
// 				'B. 5', 
// 				'C. 6'
// 			],
// 		'corectAnswer' => 'C. 6'
// 		],
// 		['question' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias suscipit cumque veniam?', 
// 		'answers' => [
// 				'A. 4', 
// 				'B. 5', 
// 				'C. 6'
// 			],
// 		'corectAnswer' => 'C. 6'
// 		],
// 		['question' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias suscipit cumque veniam?', 
// 		'answers' => [
// 				'A. 4', 
// 				'B. 5', 
// 				'C. 6'
// 			],
// 		'corectAnswer' => 'C. 6'
// 		],
// 	],
// 	"../assets/characters/lucille.png"
// );
// saveQuests(
// 	"Jack the crab!",
// 	"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod perspiciatis voluptatum eveniet, cupiditate esse aliquid cum eum ducimus harum officia beatae repudiandae incidunt numquam placeat eligendi ipsa tempora quas facere!",

// 	[
// 		['question' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias suscipit cumque veniam?', 
// 		'answers' => [
// 				'A. 4', 
// 				'B. 5', 
// 				'C. 6'
// 			],
// 		'corectAnswer' => 'C. 6'
// 		],
// 		['question' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias suscipit cumque veniam?', 
// 		'answers' => [
// 				'A. 10-15 sec', 
// 				'B. 15-30 sec', 
// 				'C. 30+ sec'
// 			],
// 		'corectAnswer' => 'C. 30+ sec'
// 		],
// 		['question' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias suscipit cumque veniam?', 
// 		'answers' => [
// 				'A. 4', 
// 				'B. 5', 
// 				'C. 6'
// 			],
// 		'corectAnswer' => 'C. 6'
// 		],
// 	],
// 	"../assets/characters/jack.png"
// );

##########################################################



// Really simple function that sends the json in relation with a XMLHttpsRequest
// This function is paired with getSubquests() function in game.js
function SendSubquests()
{
	// gets json from file
	$result = file_get_contents('../game/subquests.txt');
	// spits it out for gama.js to pick it up and use it
	echo $result;

}

SendSubquests();


?>