<html>

<body>

    <?php

    $email = $_POST["email"];
    $u_password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $phone = $_POST["phone"];

    // Validate the inputs
    
    if (strpos($email, '@') === false) {
        echo "<script>alert('Invalid email');</script>";
    } else if ($u_password != $confirm_password) {
        echo "<script> alert('Passwords dont match'); </script>";
    }

    // check if the phone is digits:
    else if (!ctype_digit($phone)) {
        echo "<script>alert('Invalid phone number');</script>";
    }

    // Store the data in the Data Base:
    else {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mandoob_db_test";


        // 1- Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);


        // 2- Check connection 
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Insert the data into the table Users in the Database: MandoobDB.
        $sql = "INSERT INTO Users (Email, Password, Phone) VALUES ('$email', '$u_password', '$phone')";
        $result = mysqli_query($conn, $sql);


        echo "<script>alert('User Add successfully');</script>";
        mysqli_close($conn);
    }


    echo "<script>window.location.href = '../sign_up.html';</script>";

    ?>


</body>

</html>