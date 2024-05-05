<?php

session_start();

// 
// check if user is currently log in:
if (isset($_SESSION['user_id'])) {

    echo $_SESSION['user_id'];

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


    $u_id = $_SESSION['user_id'];
    $name = $_POST['mealName'];
    $price = $_POST['price'];


    // Insert the data into the table Users in the Database: MandoobDB.
    $sql = "INSERT INTO items (user_id, name, price) VALUES ('$u_id', '$name', '$price')";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);

    echo "<script>alert('Item added to the list');</script>";
} 

else 
{
    echo "<script>alert('You need to Log in first (not as an Admin) !!');</script>";
}

echo "<script>history.go(-1);</script>";
?>