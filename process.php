<?php

	//---------------------------------------------------------------------------
	//								  Main
	//---------------------------------------------------------------------------
		require('header.php');

		if(array_key_exists('submitCheck', $_POST)) {
			processForm();
		} else {
			errorForm();
		}

		require('footer.php');


	//---------------------------------------------------------------------------
	//								  Functions
	//---------------------------------------------------------------------------
		//Store form information into file
		function processForm() {
		
			// Get name from field and put it into a string variable
			$name = $_POST['name'];
			$info = "$name";

			// Separate name and checkbox information
			$info = $info . "\n";

			// Append checkbox information to the string variable
			foreach ($_POST['myCheckBox'] as $check => $choice) {	
			 	if(isset($choice)){
					$info = $info . ", " . $choice;
			 	} 
			}

			// Separate checkbox and radio information
			$info = $info . "\n";

			// Append radio information to the string variable
			foreach ($_POST['cardType'] as $check => $choice) {	
			 	if(isset($choice)){
					$info = $info . ", " . $choice;
			 	} 
			}

			// Space for next customer's choice
			$info = $info . "\n\n";

			// Write to a file
			$file = "order.csv";
			file_put_contents($file, $info, FILE_APPEND|LOCK_EX);

			// Thank the user very kindly
			require('thankyou.php');
		
		}

		function errorForm() {
			require('error.php');
		}

?>
