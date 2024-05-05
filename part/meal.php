<?php
// Database connection parameters
$servername = "localhost";
$username = "username"; // Replace with your database username
$password = "password"; // Replace with your database password
$dbname = "meal";

// Create connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// Set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the JSON data sent from JavaScript and decode it
    $data = json_decode(file_get_contents("php://input"));

    // Access the item name and price
    $itemName = $data->itemName;
    $itemPrice = $data->itemPrice;

    // Prepare and execute a query to retrieve the meal information from the meal database table
    $stmt = $conn->prepare("SELECT * FROM meal WHERE name = :itemName");
    $stmt->bindParam(':itemName', $itemName);
    $stmt->execute();
    $meal = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($meal) {
        // Insert the meal information into the bill database table
        $billConn = new PDO("mysql:host=$servername;dbname=bill", $username, $password);
        $billConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $insertStmt = $billConn->prepare("INSERT INTO bill (name, price) VALUES (:itemName, :itemPrice)");
        $insertStmt->bindParam(':itemName', $itemName);
        $insertStmt->bindParam(':itemPrice', $itemPrice);
        $insertStmt->execute();

        // Optionally, you can send a response back to JavaScript
        echo "Meal information added to bill successfully.";
    } else {
        // Optionally, you can send an error response back to JavaScript
        echo "Meal not found in the database.";
    }
} else {
    // Return an error if the request method is not POST
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
