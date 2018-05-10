<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Hand Calculator</title>
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	</head>
	<body>
		<?php
			// Variables
			$displayForm = TRUE;
			$heightInches = "";
			
			// Verify Inputted Data Is A Number
			if (isset($_POST['Submit']))
			{
			     $heightInches = $_POST['heightInches'];
			     if (is_numeric($heightInches))
			     {
			          $displayForm = FALSE;
			     }
			     else
			     {
			          echo "<p>You need to enter a numeric value.</p>\n";
			          $displayForm = TRUE;
			     }
			}
			
			// Display Calculation
			if ($displayForm)
			{
		?>
		
		<form name="handForm" action="form.php" method="post">
			<p>Enter a horse's height in inches: <input type="text" name="heightInches" value="<?php echo $heightInches; ?>" /></p>
			<p>
				<input type="reset" value="Clear Form" />
				&nbsp; 
				&nbsp;
				<input type="submit" name="Submit" value="Send Form" />
			</p>
		</form>
		
		<?php
		}
			else
			{
			     echo "<p>A horse that is $heightInches inches is " . ($heightInches / 4) . " hands.</p>\n ";
			     echo "<p><a href=\"form.php\">Calculate another horse?</a></p>\n";
			}
		?>
		</body>
</html>
