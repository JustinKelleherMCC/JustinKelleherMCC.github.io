/* 
 * Horse Hand Calculator
 */

 // Convert inputted data in inches into horse hands
function calculateHands()
{
	try
	{ 
        // Save input into a variable called input
		input = document.getElementById('heightInches').value;

		// Data validation
		if (input == "") throw "empty";
        if (isNaN(input)) throw "not a number";
		
		// Converts data provided into hands.
		hands = document.getElementById('heightInches').value * 0.25;

		// If data is greater than 14.2 hand display that it is a horse, otherwise display that is a pony
		if (hands > 14.2)
		{
			// Display converted data in hands for a horse
			document.getElementById("calculationResults").innerHTML = "The horse is " + hands + " hands.";
		}
		else
		{
			// Display converted data in hands for a pony
			document.getElementById("calculationResults").innerHTML = "The pony is " + hands + " hands.";
		}
	}
    catch(err)
	{
        alert("Input is " + err + "!");
    }
}