<?php
session_start();

$uid = "Amritanshu";
$pass = "password";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $uid && $password === $pass) {
        $_SESSION["uid"] = $username;
        header("Location: profile.php");
        exit();
    } else {
        $error = "Invalid credentials!";
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
<?php include 'nav.php'; ?>

<h2>Login</h2>
<form method="post">
    <input type="text" name="username" placeholder="Username"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit">Login</button>
</form>

<?php
if ($error != "") {
    echo "<p style='color:red;'>$error</p>";
}
?>
</body>
</html>
