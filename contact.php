<?php
$servername = "sql105.infinityfree.com";
$username = "if0_37747042";
$password = "yhoCE1NnrIgly";
$dbname = "if0_37747042_contact";   

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact (name, phone, email, message) VALUES ('$name', '$phone', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "WE WILL CONTACT YOU SOON";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
