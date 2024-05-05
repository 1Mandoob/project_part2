<?php
// Include your database connection file
include 'mandoob.sql';

// Check if the POST request contains the required data
if (isset($_POST['itemName']) && isset($_POST['itemPrice'])) {
    // Retrieve the meal name and price from the POST request
    $itemName = $_POST['itemName'];
    $itemPrice = $_POST['itemPrice'];

    // Insert the meal into the 'bill' table
    $stmt = $conn->prepare("INSERT INTO bill (meal_id, quantity) VALUES (:meal_id, :quantity)");
    $stmt->bindParam(':meal_id', $itemName); // Assuming 'meal_id' corresponds to 'meal_name' in the 'meal' table
    $stmt->bindValue(':quantity', 1); // Assuming quantity is always 1 when adding a meal
    $stmt->execute();

    // Optionally, you can send a response back to the JavaScript to indicate success
    echo "Meal added to bill successfully!";
} else {
    // If the required data is not provided, send an error response
    echo "Error: Missing data!";
}
?>
