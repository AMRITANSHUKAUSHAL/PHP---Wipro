<?php 
$fullname = "";
$username = "";
$email = "";
$password = "";
$confirmpassword = "";
$error = "";
$table = false;

$fixedUsername = "Amritanshu";
$fixedPassword = "password";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

  
    if ($fullname == "" || $username == "" || $email == "" || $password == "" || $confirmpassword == "") {
        $error = "Write all fields";
    } else if ($password < 6) {
        $error = "Password less than 6 characters";
    }  else if ($password != $fixedPassword) {
        $error = "Invalid password";
    } else if($password!==$confirmpassword){
        $error = "Password Mismatch";
    } 
    else {
        $table = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registration Form</title>
   
</head>
<body>

<h1>Registration Form</h1>

<form method="post">
    <label>Full Name:</label>
    <input type="text" name="fullname" placeholder="Enter Full Name">
    <label>Username:</label>
    <input type="text" name="username" placeholder="Enter Username">
    <label>Email:</label>
    <input type="text" name="email" placeholder="Enter Email">
    <label>Password:</label>
    <input type="password" name="password" placeholder="Enter Password">
    <label>Confirm Password:</label>
    <input type="password" name="confirmpassword" placeholder="Confirm Password">
    <button type="submit">Submit</button>
</form>

<?php 
if ($error != "") {
    echo "<div class='error'>$error</div>";
}

if ($table) {
    echo "<h2>Welcome, $username is logged in!</h2>";
    echo "<h3>Table Information:</h3>";
    echo "<table>";
    echo "<tr><th>Full Name</th><th>Username</th><th>Email</th></tr>";
    echo "<tr><td>$fullname</td><td>$username</td><td>$email</td></tr>";
    echo "</table>";
}
?>

</body>
</html>