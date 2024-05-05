<?php

// Database connection
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "mandoob";

// 1- Create connection
$conn = mysqli_connect($servername, $username, $dbpassword, $dbname);

// 2- Check connection 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// get the item id
$item_id = $_POST['item_id'];

// delete it from the data base
$sql = "DELETE FROM Items WHERE item_id = $item_id";
$result = mysqli_query($conn, $sql);

echo "<script>alert('Item  deleted with successfully');</script>";
echo "<script>window.location.href = 'calculation_test.php';</script>";

mysqli_close($conn);
?>