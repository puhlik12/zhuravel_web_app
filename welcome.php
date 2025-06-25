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
    <title>Hi!!!!</title>
</head>
<body>
    <h1>Hi!, <?php echo htmlspecialchars($username); ?></h1>
    <a href="logout.php">exit</a>
</body>
</html>