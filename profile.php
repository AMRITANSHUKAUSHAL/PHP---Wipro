<?php
session_start();
if (!isset($_SESSION["uid"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head><title>Profile</title></head>
<body>
<?php include 'nav.php'; ?>

<h2>Welcome, <?php echo $_SESSION["uid"]; ?>!</h2>
<p>This is your profile page.</p>

</body>
</html>
