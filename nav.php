<?php
session_start();
?>

<nav>
    <a href="home.php">Home</a>
    <a href="contact.php">Contact</a>
    <a href="about.php">About</a>

    <?php if (isset($_SESSION["uid"])): ?>
        <a href="profile.php">Profile</a>
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <a href="login.php">Login</a>
    <?php endif; ?>
</nav>
