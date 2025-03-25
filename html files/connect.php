<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$state = $_POST['state'];
	$email = $_POST['email'];
	$number = $_POST['number'];
    $pincode = $_POST['pincode'];

	// Database connection
	$conn = new mysqli('localhost','root','','product user');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration7(firstName, lastName, state, email, number, pincode) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssis", $firstName, $lastName, $state, $email, $number, $pincode);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>