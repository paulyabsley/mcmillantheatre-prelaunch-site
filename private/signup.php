<?php 

// Sanitize for HTML output 
function h($string) {
	return htmlspecialchars($string);
}

// Sanitize for JavaScript output
function j($string) {
	return json_encode($string);
}

// Sanitize for use in a URL
function u($string) {
	return urlencode($string);
}

$displayError = '';
$displaySuccess = '';

if (isset($_GET['signup'])) {
	if (isset($_GET['Error'])) {
		$error = h($_GET['Error']);
		$errors = array('EmailExists', 'NoEmail', 'NoLastName', 'InvalidEmail');
		if (in_array($error, $errors)) {
			switch ($error) {
				case 'EmailExists':
					$displayError = 'This email address is already registered.';
					break;
				case 'NoEmail':
					$displayError = 'Please enter an email address.';
					break;
				case 'NoLastName':
					$displayError = 'Please enter a last name.';
					break;
				case 'InvalidEmail':
					$displayError = 'Please enter a valid email address.';
					break;
			}
		}
	} else {
		$displaySuccess = 'Great you\'re signed up! We will be sending out information soon.';
	}
}