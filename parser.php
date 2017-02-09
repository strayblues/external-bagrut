<?php
if( isset($_POST['n']) && isset($_POST['e']) && isset($_POST['m']) ){
	$n = $_POST['n']; // use preg_replace() to filter the data
	$e = $_POST['e'];
	$m = nl2br($_POST['m']); // Preserve newlines entered by the user
	$to = "strayblues@gmail.com";
	$from = $e;
	$subject = 'Contact Form Message';
  // Format the incoming emails:
	$message = '<b>Name:</b> '.$n.' <br><b>Email:</b> '.$e.' <p>'.$m.'</p>';
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-8\n"; 
  // Run the mail function
	if( mail($to, $subject, $message, $headers) ){
		echo "success";
	} else {
		echo "ההודעה לא נשלחה. נסי שנית מאוחרכך.";
	}
}
?>
