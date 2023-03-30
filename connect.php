<?php
header("Access-Control-Allow-Origin: *");

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'grocerease_db';

$conn = mysqli_connect($server, $username, $password, $db);

// if(mysqli_connect($server, $username, $password, $db)){
//     echo 'Success!';
// }else{
//     echo 'Failed :/';
// }
?>