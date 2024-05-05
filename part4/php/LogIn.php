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
                <div class="collapse navbar-collapse justify-content-end " style="margin-right: 90px;" id="navbarNav">
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

    class User
    {
        public $u_id;
        public $u_email;
        public $u_password;
        public $u_phone;
        function __construct($u_id, $u_email, $u_password, $u_phone)
        {
            $this->u_id = $u_id;
            $this->u_email = $u_email;
            $this->u_password = $u_password;
            $this->u_phone = $u_phone;
        }
    }



    $ADMIN_EMAIL = "ADMIN@ADMIN";
    $ADMIN_PASSWORD = "ADMIN";


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


    // Get POST data
    $email = $_POST['email_input'];
    $password = $_POST['password_input'];

    // if admin select all the data:

    if ($email == $ADMIN_EMAIL && $password == $ADMIN_PASSWORD) {

        // This for  deleting the prev session variables 
        
        // Start the session
        session_start();

        // Unset all session variables
        session_unset();

        // Destroy the session
        session_destroy();

        $sql = "SELECT * FROM users";
    } else {
        $sql = "SELECT * FROM users WHERE Email = '$email' AND Password = '$password'";

        echo "yes";

        
        // This for  deleting the prev session variables

        // Start the session
        session_start();

        // Unset all session variables
        session_unset();

        // Destroy the session
        session_destroy();

        // Start a new session for the new login
        session_start();

        echo "endyes";

        $result_uid = mysqli_query($conn, $sql);
        $row_uid = mysqli_fetch_assoc($result_uid);

        $_SESSION['user_id'] = $row_uid['user_id'];
    }

    $result = mysqli_query($conn, $sql);
    $users = array();

    // check if there is no user and he is not the admin 
    if (mysqli_num_rows($result) <= 0 && !($email == $ADMIN_EMAIL && $password == $ADMIN_PASSWORD)) {
        echo "<script>alert('There is no such user');</script>";
        echo "<script>window.location.href = '../log_in.html';</script>";
    } 
    else {
        
        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
                $user = new User($row['user_id'], $row['Email'], $row['Password'], $row['Phone']);
                array_push($users, $user);
            }
        }



        // print the users in a table
        function displayUsers($users)
        {
            echo "<div style='margin: 0 10px;'>";

            echo "<table border = 'border' cellpadding = 5px style = 'border-collapse: collapse; width: 100%;'>";
            echo "<tr> <th> User id </th> <th> email </th> <th>password</th> <th>phone</th> <th>Delete</th> <th>Edit</th> </tr>";

            foreach ($users as $user) {
                echo "<tr>";
                echo "<td>" . $user->u_id . "</td>";
                echo "<td>" . $user->u_email . "</td>";
                echo "<td>" . $user->u_password . "</td>";
                echo "<td>" . $user->u_phone . "</td>";

                echo "<td><a href='delete_user.php?user_id=" . $user->u_id . "'>Delete</a></td>";
                echo "<td><a href='edit_user.php?user_id=" . $user->u_id . "'>Edit</a></td>";


                echo "</tr>";
            }

            echo "</table>";
            echo "</div>";
        }

        displayUsers($users);
    }

    mysqli_close($conn);

    ?>

</body>

</html>