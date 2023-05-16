<?php 
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT*FROM login WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);


?>