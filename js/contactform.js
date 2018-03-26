/* 
 * Contact Form
 */

 // Checks form for data in each box
function validateForm() {
	// Saves form data to variables
    var name = document.forms["contact"]["name"].value;
	var email = document.forms["contact"]["email"].value;
    var phone = document.forms["contact"]["phone"].value;
    var preferredContactMethod = document.forms["contact"]["preferredContactMethod"].value;
	var message = document.forms["contact"]["message"].value;
	var termsAndPolicy = document.forms["contact"]["termsAndPolicy"].value;

	// Checks if name box is empty
    if (name == "")
	{
        alert("Name must be filled out.");
        return false;
    }
	
	// Checks if email box is empty
	if (email == "")
	{
        alert("Email must be filled out.");
        return false;
    }
	
	// Checks if phone box is empty
	if (phone == "")
	{
        alert("Phone must be filled out.");
        return false;
    }
	
	// Checks if a preferred contact method is selected
	if (preferredContactMethod == "")
	{
        alert("Your preferred contact method must be selected.");
        return false;
    }
	
	// Checks if message box is empty
	if (message == "")
	{
        alert("You must enter a message.");
        return false;
    }
	
	// Checks if user accepted the terms and policy
	if (!(termsAndPolicy == "agree"))
	{
        alert("You must agree to our terms and policy..");
        return false;
    }
}