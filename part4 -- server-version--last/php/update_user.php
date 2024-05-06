<html>

<body>

    <?php

    $email = $_POST["email"];
    $u_password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $phone = $_POST["phone"];
    $user_id = $_POST["user_id"];

    // Validate the inputs
    
    if (strpos($email, '@') === false) {
        echo "<script>alert('Invalid email');</script>";
    } 
    
    else if ($u_password != $confirm_password) {
        echo "<script>alert('Passwords dont match');</script>";
    }

    // check if the phone is digits:
    else if (!ctype_digit($phone)) {
        echo "<script>alert('Invalid phone number');</script>";
    }

    // Store the data in the Data Base:
    else {


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

        // update the data into the table Users in the Database: MandoobDB.

        $sql = "UPDATE users SET email = '$email', Password = '$u_password', phone = '$phone' WHERE user_id = '$user_id' ;";
        
        $result = mysqli_query($conn, $sql);


        echo "<script>alert('User with id: ".$user_id." updated successfully');</script>";

        mysqli_close($conn);
    }

    
    echo "<script>window.location.href = '../log_in.html';</script>";
    ?>


</body>

</html>