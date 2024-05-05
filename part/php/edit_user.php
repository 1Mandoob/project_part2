<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mandoob</title>
    <link rel="stylesheet" href="singup_login.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    <link rel="icon" href="logos/Mandoob-logos_transparent.png" type="x-icon" style="width: max-content;">

    <link rel="stylesheet" href="carusol.css">

    <style>
        #custom_btn {
            background-color: rgb(101, 97, 97);
            width: inherit;
            border-color: white;
        }

        #custom_btn:hover {
            background-color: white;
            width: inherit;
            border-color: black;
            color: black;
        }
    </style>

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
                            <a class="nav-link" href="../calculation.html">Bill</a>
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



    $u_id = $_GET["user_id"];

    $sql = "SELECT * FROM users WHERE user_id = '$u_id'";
    $result = mysqli_query($conn, $sql);


    $row = mysqli_fetch_assoc($result);
    $user = new User($row['user_id'], $row['Email'], $row['Password'], $row['Phone']);


    echo "  <div class='container mt-4 centralize'>

    <div class='row' style='height: 400px;'>


        <div class='col-md-6 ' id='card_custom-style'
            style='background: linear-gradient(to bottom, #333333, #f5f5f5);'>

            <div class='row mt-3'>

                <div class='col-12 text-center mt-4'>
                    <h1 class='text-white'>Personal Information
                    </h1>
                </div>

            </div>
        </div>

        <div class='col-md-6'>


            <form method='post' action='update_user.php'>
   
                <div class='mb-3'>
   
                    <label for='InputEmail1' class='form-label'>Email address</label>
                    <input type='email' name='email' class='form-control' id='InputEmail1' aria-describedby='emailHelp'
                    
                    value = " . $user->u_email . ">
                    <div id='emailHelp' class='form-text'>We'll never share your email with anyone else.</div>
   
                </div>

                <div class='mb-3'>
   
                    <label for='InputPassword1' class='form-label'>Password</label>
                    <input type='text' name='password' class='form-control' id='InputPassword1'
                    
                    
                    value = " . $user->u_password . "
                    >
   
                </div>

                <div class='mb-3'>
                    <label for='InputPassword2' class='form-label'>Confirm password</label>
                    <input type='text' name='confirm_password' class='form-control' id='InputPassword2'
                    
                    value = " . $user->u_password . "
                    
                    >
                </div>


                <div class='mb-3'>
                    <label for='phoneIput' class='form-label'>Phone number</label>
                    <input type='text'  name='phone' class='form-control' id='phoneIput' aria-describedby='phoneHelp'
                    
                    value = " . $user->u_phone . ">
                </div>

                <div class='container-fluid' style='margin-top: 20px;'>
                    <button type='submit' class='btn btn-primary' id='custom_btn'>Save</button>
                </div>

                <input type='hidden' name='user_id' value='$user->u_id'>
   
            </form>
   
   
        </div>
    </div>
</div>";











    mysqli_close($conn);

    ?>

</body>

</html>