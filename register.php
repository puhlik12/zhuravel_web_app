<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $db->exec($query);
    
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form method="POST">
        <input type="text" name="username" placeholder="user" required>
        <input type="password" name="password" placeholder="pass" required>
        <button type="submit">zaregistririvatsa</button>
    </form>
    <p>Haw accaunt? <a href="login.php">sgnin</a></p>
</body>
</html>