<?php
session_start();

// Hapus semua variabel sesi
session_unset();

// Hancurkan sesi
session_destroy();

// Alihkan ke halaman login
header("Location: session_login.php");
exit();
?>
