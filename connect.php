<?php
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];


	// Database connection
	$conn = new mysqli('localhost','root','','admin');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into users(name, phone, email, password) values('$name','$phone','$email','$password')");
		//$stmt->bind_param($firstName, $lastName, $gender, $email, $password, $phonenumber);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		header('location:show_grid_Delete.php');
		$stmt->close();
		$conn->close();
	}
?>
