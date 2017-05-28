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