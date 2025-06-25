<?php
require 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username']; 
    $password = $_POST['password']; 
    
    $db->exec("INSERT INTO users (username, password) VALUES ('$username', '$password')");
    
    header("Location: login.php");
    exit;
}
?>

<form method="POST">
    <input type="text" name="username" required>
    <input type="password" name="password" required>
    <button type="submit">Register</button>
</form>