<?php
/* PHP TEST TASK | API */


// Get parameters of POST request
$email = $_POST['email'];
$amount = $_POST['amount'];

if(!empty(trim($email)) && !empty(trim($amount))){ // Checking each field, if its empty
	
	$data = [ 'status' => 'approved', 'transID' => rand() ]; // Formation approved response  
	
} else
	$data = [ 'status' => 'rejected', 'error_message' => "Fraud detected!" ]; // Formation rejected response formation 

echo json_encode( $data );
?>