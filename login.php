<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $db->query($query);
    
    if ($result->fetchArray()) {
        setcookie('username', $username, time() + 3600, '/');
        header('Location: welcome.php');
        exit;
    } else {
        $error = "invalig";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Awtarization</title>
</head>
<body>
    <h1>Awtarization</h1>
    <?php if (isset($error)) echo "<p style='color:red'>$error</p>"; ?>
    <form method="POST">
        <input type="text" name="username" placeholder="user" required>
        <input type="password" name="password" placeholder="pass" required>
        <button type="submit">signin</button>
    </form>
    <p>Nety? <a href="register.php">Regnytsa</a></p>
</body>
</html>