<html lang="en">


<?php
session_start();
?>

<head>
    <title>Checkout</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="singup_login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <style>
        div.nee {
            border-style: hidden;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .total {
            font-weight: bold;
            text-align: right;
        }

        .order-btn {
            margin-top: 20px;
            text-align: center;
        }
    </style>


</head>

<body>
    <script>

        function applyDiscount() {
            var discountCode = document.getElementById('discount-code').value;
            var discountedPrice = document.getElementById('total-price');

            // Check if the entered discount code is valid
            if (discountCode === '77898') {
                // Apply a discount of 10%
                var totalPrice = parseFloat(discountedPrice.textContent);
                var discountAmount = totalPrice * 0.1;
                var finalPrice = totalPrice - discountAmount;

                // Update the displayed discounted price
                document.getElementById('discounted-price').textContent = finalPrice.toFixed(2);
            } else {
                alert('Invalid discount code');
            }
        }

    </script>



    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">

        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="imgs/icons/Mandoob-logos_black.png" alt="Logo" width="30" height="24"
                    class="d-inline-block align-text-top">
                <span>Mandoob</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end " style="margin-right: 90px;" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.html">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cntctus.html">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="log_in.html">Login/Singup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="funpage.html">Game</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="calculation_test.php">Bill</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="questionnaire.html">questionnaire</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Order
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="trucks.html">Truck</a></li>
                            <li><a class="dropdown-item" href="HomeMade.html">HomeMade business</a></li>
                        </ul>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <hr class="hidden">
    <br><br><br>


    <div class="container">

        <h1>Bill</h1>

        <!-- Inside the body of checkout.html -->
        <table id="bill-table">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Price (OMR)</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <?php
                $total_Price = 0;
            ?>

            <tbody id="bill-table-body">

                <?php

                // check if user is currently log in:
                if (isset($_SESSION['user_id'])) {

                    $user_id = $_SESSION['user_id'];

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

                    $sql = "SELECT * FROM items WHERE user_id = '$user_id'";
                    $result = mysqli_query($conn, $sql);

                    $items = array();

                    class Item
                    {
                        public $item_id;
                        public $name;
                        public $price;

                        function __construct($item_id, $name, $price)
                        {
                            $this->item_id = $item_id;
                            $this->name = $name;
                            $this->price = $price;
                        }
                    }



                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_assoc($result)) {
                            $item = new Item($row['item_id'], $row['name'], $row['price']);
                            array_push($items, $item);
                        }
                    }




                    function displayItems($items)
                    {
                        foreach ($items as $item) {
                            echo "<tr>";

                            echo "<td>" . $item->name . "</td>";
                            echo "<td>" . $item->price . "</td>";

                            global $total_Price;

                            $total_Price+= $item->price;

                            echo "
                            <td>
                            
                            <form method='post' action='delete_item.php'>

                            <input type='hidden' name='item_id' value='".$item->item_id."'>
                            <input type='submit' name='delete' value='Delete'>

                            </form>            
                            
                            </td>";
                            echo "</tr>";
                        }
                    }

                    displayItems($items);
                } else {
                    echo "You need to Log in first (not as an Admin) !!";
                }
                ?>

            </tbody>
        </table>

        <!-- Placeholder for total price -->

        <?php
        echo "<br>";
        echo "<p>Total Price: <span id='total-price'>$total_Price</span> OMR</p>";
        ?>

        <div class="discount-section">
            <label for="discount-code">Enter Discount Code:</label>
            <input type="text" id="discount-code" name="discount-code">
            <button onclick="applyDiscount()">Apply</button>
        </div>


        <!-- Placeholder for discounted price -->
        <p>Discounted Price: <span id="discounted-price">0</span> OMR</p>


    </div>
</body>

</html>