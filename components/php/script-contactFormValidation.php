<!--		Validate Form-->
<?php

// orig methods

function test_input( $data ) {
	$data = trim( $data );
	$data = stripslashes( $data );
	$data = htmlspecialchars( $data );

	return $data;
}

if ( isset( $_REQUEST['submit'] ) ) {
// Initialize error array.
	$errors = array();


	// Check for a proper First name
	if ( ! empty( $_REQUEST['firstName'] ) ) {
		$firstName = $_REQUEST['firstName'];
		$pattern   = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters

		if ( preg_match( $pattern, $firstName ) ) {
			$firstName = $_REQUEST['firstName'];
		} else {
			$errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-20 long.';
		}
	} else {
		$errors[] = 'You forgot to enter your First Name.';
	}

	// Check for a proper Last name
	if ( ! empty( $_REQUEST['surName'] ) ) {
		$surName = $_REQUEST['surName'];
		$pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
		if ( preg_match( $pattern, $surName ) ) {
			$surName = $_REQUEST['surName'];
		} else {
			$errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-20 long.';
		}
	} else {
		$errors[] = 'You forgot to enter your Last Name.';
	}

	//Check for a valid phone number
	if ( ! empty( $_REQUEST['phone'] ) ) {
		$phone   = $_REQUEST['phone'];
		$pattern = "/^[0-9\_]{7,20}/";
		if ( preg_match( $pattern, $phone ) ) {
			$phone = $_REQUEST['phone'];
		} else {
			$errors[] = 'The phone number you entered is invalid.';
		}
	} else {
		$errors[] = 'You forgot to enter your Phone number.';
	}


	if ( ! empty( $_REQUEST['email'] ) ) {
		// Remove all illegal characters from email
		$email = filter_var($_REQUEST['email'], FILTER_SANITIZE_EMAIL );

		// Validate e-mail
		if (! filter_var( $email, FILTER_VALIDATE_EMAIL ) === false ) {
			$email = $_REQUEST['email'];
		} else {
			$errors[] = "Email is not a valid email address";
		}
	}
}

//If submit request received and no errors are present, compose and sed mail

if ( isset( $_REQUEST['submit'] ) ) {
	if ( empty( $errors ) ) {
		$from = "Middleton Estates Online Enquiry Form"; //Site name

		$to      = "chr1s_bolton@icloud.com; cbolt32@gmail.com";
		$subject = "Contact Form Enquiry From" . $firstName . "";

		$message = "Message from " . $firstName . " " . $surName . "
  Phone: " . $phone . "
  Email: " . $email . "
  Enquiry type: " . test_input($_REQUEST['enquiry']) . "
  Enquiry Details: " . test_input($_REQUEST['detail']) . "";

		mail( $to, $subject, $message, $from );
	}
}

//Print Errors on page request was submitted
if ( isset( $_REQUEST['submit'] ) ) {
	// Print any error messages.
	if ( ! empty( $errors ) ) {
		echo '<hr /><h3>The following occurred:</h3><ul>';
		// Print each error.
		foreach ( $errors as $msg ) {
			echo '<li>' . $msg . '</li>';
		}
		echo '</ul><h3>Your mail could not be sent due to input errors.</h3><hr />';
	} else {
		echo '<hr /><h3 align="center">Your mail was sent. Thank you!</h3><hr /><p>Below is the message that you sent.</p>';
		echo "Message from " . $firstName . " " . $surName . " <br />Phone: " . $phone . " <br />";
		echo "</br>Email: " . $email . "</br>";
		echo "</br> Enquiry Type: ". test_input($_REQUEST['enquiry']);
		echo "</br> Enquiry Details: " . test_input($_REQUEST['detail']) . "</br>" ;
		"</hr>";
	}
}
//End of errors array

//End of validation






