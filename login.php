<?php
require 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $result = $db->querySingle("SELECT * FROM users WHERE username = '$username' AND password = '$password'", true);
    
    if ($result) {
        setcookie('user_id', $result['id']);
        setcookie('username', $result['username']);
        header("Location: welcome.php");
        exit;
    }
}
?>