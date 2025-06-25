<?php
if (!isset($_COOKIE['username'])) {
    header('Location: login.php');
    exit;
}

$username = $_COOKIE['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Добро пожаловать</title>
</head>
<body>
    <h1>Привет, <?php echo htmlspecialchars($username); ?></h1>
    <a href="logout.php">Выйти</a>
</body>
</html>