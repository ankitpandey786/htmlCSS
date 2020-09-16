<?php


$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$password = $_POST['pwd'];
$confirm = $_POST['cpwd'];


// database connection
$conn = new mysqli('localhost','root','Ankit@123','registration');
if($conn->connect_error){
	die('connection failed :'.$conn->connect_error);

}
else
{
	$stmt = $conn->prepare("insert into usertable(name, number, email, password, confirm) values(?, ?, ?, ?, ?)");
	$stmt->bind_param("sisss",$name, $number, $email, $password, $confirm);
	$stmt->execute();
	echo"registration successfull";
	$stmt->close();
	$conn->close();
}


?>