<?php
$username = $_COOKIE['username'] ?? 'Guest';

echo "Привет, " . $username;
?>

<a href="logout.php">Logout</a>