/* 
 * Displays user's Screen object
 */

window.onload = function() {
	// Format's the Screen object in a user friendly way
	var txt = "";
	txt += "<p><b>Total Width</b>: " + screen.width + "</p>";
	txt += "<p><b>Total Height</b>: " + screen.height + "</p>";
	txt += "<p><b>Available Width</b>: " + screen.availWidth + "</p>";
	txt += "<p><b>Available Height</b>: " + screen.availHeight + "</p>";
	txt += "<p><b>Color Depth</b>: " + screen.colorDepth + "</p>";
	txt += "<p><b>Color Resolution</b>: " + screen.pixelDepth + "</p>";
	
	// Display the Screen object
	document.getElementById("screenProperties").innerHTML = txt;
};