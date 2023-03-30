<?php
include 'connect.php';
$user = $_POST["username"];
$pass = $_POST["password"];

$checkUser = "SELECT * FROM customer_tbl WHERE customer_username = '$user' AND customer_password = '$pass'";
$runUser = mysqli_query($conn, $checkUser);

if(mysqli_num_rows($runUser)){
    $data = mysqli_fetch_assoc($runUser);
    $userN = $data['customer_username'];
    echo json_encode(array('username' => $userN, 'message' => 'Login Successful'));
} else {
    echo json_encode(array('message' => 'Login Failed'));
}

?>