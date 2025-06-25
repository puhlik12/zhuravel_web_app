<?php
require 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $result = $db->querySingle("SELECT * FROM users WHERE username = '$username' AND password = '$password'", true);
    
    if ($result) {
        setcookie('user_id', $result['id'], time()+3600);
        setcookie('username', $result['username'], time()+3600);
        
        header('Location: welcome.php');
        exit;
    }
}
?>

<form method="POST">
    <input type="text" name="username" required>
    <input type="password" name="password" required>
    <button type="submit">Login</button>
</form>