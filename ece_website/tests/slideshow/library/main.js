$(document).ready(function() {

	// code by www.voidcanvas.com
	var textDiv = $("#textDiv");
	var sentence = textDiv.html().split("");
	var vcTimeline = new TimelineMax({
		repeat : 10,
		repeatDelay : 2,
		yoyo : true
	});

	textDiv.html("");

	$.each(sentence, function(index, val) {
		if (val == " ") {
			val = "&nbsp;";
		}
		var letter = $("<span/>", {
			id : "txt" + index
		}).html(val).appendTo(textDiv);
		vcTimeline.to(letter, 1, {
			rotationY : 360,
			rotationX : 360,
			textShadow : "0px 0px 0px white",
			color : "none",
			autoAlpha : 1,
			ease : Back.easeOut,
			transformOrigin : "50% 50% -20"
		}, index * 0.05);
	});

}); 
