<html>

<body>

    <?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $comments = $_POST['comments'];


    if (strlen($name) < 3) {
        echo "alert('Name must be at least 3 characters long.')";
        return;
    }

    // Validate the inputs    
    else if (strpos($email, '@') === false) {
        echo "<script>alert('Invalid email');</script>";
    }

    // Validation for comments (at least 10 characters)
    else if (strlen($comments) < 10) {
        echo "alert('Comments must be at least 10 characters long.');";
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

        $name = $_POST['name'];
        $email = $_POST['email'];
        $rating = $_POST['rating'];
        $comments = $_POST['comments'];


        // Insert the data into the table Users in the Database: MandoobDB.
        $sql = "INSERT INTO users_feedback (Name, Email, Rating, Comments) VALUES ('$name', '$email', '$rating', '$comments')";
        $result = mysqli_query($conn, $sql);


        echo "<script>alert('Form submitted successfully!');</script>";
        mysqli_close($conn);
    }

    echo "<script>window.location.href = '../questionnaire.html';</script>";
    ?>
</body>

</html>