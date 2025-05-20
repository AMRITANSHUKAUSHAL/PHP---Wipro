<?php
$conn = mysqli_connect('localhost', 'root', '', 'wipro') or die('DB not connected');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name  = $_POST['name'];
    $age   = $_POST['age'];
    $grade  = $_POST['grade'];
    $email   = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO students (name, age, grade, email, password)
              VALUES ('$name', '$age', '$grade', '$email', '$password')";

    $resp = mysqli_query($conn, $query);

    if ($resp) {
        header("Location: index.php");
        exit;
    } else {
        echo "Erorr Adding Data";
    }
}

mysqli_close($conn);
?>
