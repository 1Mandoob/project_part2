<?php

// Database connection
$servername = "sql200.infinityfree.com";
$username = "if0_36493743";
$dbpassword = "--";
$dbname = "if0_36493743_mandoob";

// 1- Create connection
$conn = mysqli_connect($servername, $username, $dbpassword, $dbname);

// 2- Check connection 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// get the item id
$item_id = $_POST['item_id'];

// delete it from the data base
$sql = "DELETE FROM items WHERE item_id = $item_id";
$result = mysqli_query($conn, $sql);

echo "<script>alert('Item  deleted with successfully');</script>";
echo "<script>window.location.href = 'calculation_test.php';</script>";
mysqli_close($conn);
?>