<?php
session_start();

try {
    // Periksa apakah pengguna sudah login, jika ya, alihkan ke halaman utama
    if(isset($_SESSION['username'])) {
        header("Location: session_home.php");
        exit();
    }

    // Periksa apakah ada upaya pengiriman formulir login
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // Simpan informasi login
        $username = "iqbal2005"; // Ganti ini dengan username yang benar
        $password = "iqbal123"; // Ganti ini dengan password yang benar

        // Periksa apakah username dan password yang dimasukkan sesuai
        if($_POST['username'] == $username && $_POST['password'] == $password) {
            // Jika sesuai, set session dan alihkan ke halaman utama
            $_SESSION['username'] = $username;
            header("Location: session_home.php");
            exit();
        } else {
            $error = "Username atau password salah.";
        }
    }
} catch (Exception $e) {
    $error = "Terjadi kesalahan: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>
<?php if(isset($error)) { ?>
    <p><?php echo $error; ?></p>
<?php } ?>
<form method="post" action="">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>

</body>
</html>
