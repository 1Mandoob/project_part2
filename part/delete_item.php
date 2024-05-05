<?php

// Database connection
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "mandoob_db_test";

// 1- Create connection
$conn = mysqli_connect($servername, $username, $dbpassword, $dbname);

// 2- Check connection 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$u_id = $_GET["user_id"];

$sql = "DELETE FROM Items WHERE user_id = $u_id";
$result = mysqli_query($conn, $sql);

// echo "<script>alert('Item with deleted with successfully');</script>";
// echo "<script>window.location.href = 'calculation_test.php';</script>";
mysqli_close($conn);

header('Location: items.php');
exit;
?>