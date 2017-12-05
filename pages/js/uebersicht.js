window.onload = function() {
	//Set position of menu

	var sensors = document.getElementsByClassName("sensor");
	var titles = document.getElementsByClassName("title");

	for(var i = 0; i < titles.length; i++){
		var pos = (Math.ceil(sensors[i].offsetWidth / 2) - (Math.ceil(titles[i].offsetWidth / 2)));
		log(pos);
		titles[i].style.marginLeft = '' + pos + "px";
	}
}

function log(input) {
	console.log('' + input);
	return 1; 
}