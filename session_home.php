<?php
session_start();

// Periksa apakah pengguna sudah login, jika tidak, alihkan ke halaman login
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>

<h2>Selamat Datang, <?php echo $_SESSION['username']; ?></h2>
<a href="session_logout.php">Logout</a>

</body>
</html>
