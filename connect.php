	<!-- Form Connection File to phpMyAdmin Database-->

<?php

	// Get values from form...
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	
	// Database Connection...
	$conn = new mysqli('localhost', '_AMarais', 'atZGW8wpTfLHkLPY', 'AMarais_13dit_phpform');
	
if($conn->connect_error){
	
	die('Connection Failed : '.$conn->connect_error);
	
}else{
		
	$result = $conn->prepare("insert into contact(name, email, phone, message) values(?, ?, ?, ?)");
	$result->bind_param("ssss", $name, $email, $phone, $message);
	$result->execute();
	echo "Submission successful, thank you we will be in contact with you soon.";
	$result->close();
	$conn->close();
	
}
	
?>