<?php
include 'connect.php';

$firstname = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$user = $_POST['userName'];
$passy = $_POST['passy'];
$confirmPassword = $_POST['confirmPassword'];

$sql = "INSERT INTO customer_tbl(customer_fname, customer_lname, customer_email, customer_address, customer_username, customer_password) 
		VALUES ('$firstname', '$lastName', '$email', '', '$user', '$passy')";
$result = mysqli_query($conn, $sql);

?>