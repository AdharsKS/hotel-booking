
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel_db";
    //Ceate connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    //Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    mysqli_set_charset($conn, "utf8");

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['userName'];
        $email = $_POST['userEmail'];
        $password = $_POST['userPassword'];
        $phone = $_POST['userPhone'];
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
          echo "<script>alert('Email already exists');</script>";
          //header('Location: signup.php');
        } else {
            $query = "INSERT INTO users (name, email, password, phone) VALUES ('$name', '$email', '$password', '$phone')";
            mysqli_query($conn,$query);
            header("Location: login.php");
            exit(); 
            if ($conn->query($query) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $query . "<br>" . $conn->error;
            } 
        // Redirect to the home page
        header('Location: home.php');
        exit();
        }
        
    } else {
        echo "Invalid request";
    }
?>