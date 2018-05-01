/*
	JavaScript 6th Edition
	Chapter 12
	Hands-on Project 12-1

	Author: Justin Kelleher
	Date:   May 1, 2018

	Filename: index.htm
*/

function display(event) {
	$(event.currentTarget).next().fadeIn("slow");
}

$("h3").click(display)