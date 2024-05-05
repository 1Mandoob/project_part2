<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mandoob</title>
    <link rel="stylesheet" href="singup_login.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="icon" href="logos/Mandoob-logos_transparent.png" type="x-icon" style="width: max-content;">

    <link rel="stylesheet" href="carusol.css">

</head>

<body>

    <header>

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid font1">
            <!-- Logo and brand name -->
            <a class="navbar-brand" href="../index.html">
                <img src="../imgs/icons/Mandoob-logos_black.png" alt="Logo" width="30" height="24"
                    class="d-inline-block align-text-top">
                <span>Mandoob</span>
            </a>
            <!-- Navbar toggle button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse justify-content-end " style="margin-right: 90px;"
                id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../aboutus.html">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../cntctus.html">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../log_in.html">Login/Singup</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../funpage.html">Game</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../calculation_test.php">Bill</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../questionnaire.html">questionnaire</a>
                    </li>


                    <!-- Dropdown menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Order
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../trucks.html">Truck</a></li>
                            <li><a class="dropdown-item" href="../HomeMade.html">HomeMade business</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </header>
    <br><br><br>


    <?php

    // Database connection
    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "mandoob";

    // 1- Create connection
    $conn = mysqli_connect($servername, $username, $dbpassword, $dbname);

    // 2- Check connection 
    if (!$conn) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }


    $u_id = $_GET["user_id"];

    $sql = "DELETE FROM Users WHERE user_id = $u_id";
    $result = mysqli_query($conn, $sql);

    echo "<script>alert('User with deleted with successfully');</script>";
    echo "<script>window.location.href = '../log_in.html';</script>";
    mysqli_close($conn); 
    
    ?>

</body>

</html>