<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Pendaftaran</title>
</head>
<body>
    <?php
    // Fungsi untuk mendapatkan nilai dari cookies
    function getCookie($name) {
        return isset($_COOKIE[$name]) ? $_COOKIE[$name] : '';
    }
    ?>

    <?php if (isset($_COOKIE["nama"])) : ?>
        Selamat datang <b><?php echo getCookie("nama"); ?></b><br>
        NIM : <?php echo getCookie("nim"); ?><br>
        Email : <?php echo getCookie("email"); ?><br>
        Tempat, Tanggal Lahir : <?php echo getCookie("tempat"); ?>, <?php echo getCookie("tanggal"); ?><br>
        Alamat : <?php echo getCookie("alamat"); ?><br>
        Jenis Kelamin : <?php echo getCookie("jenis_kelamin"); ?><br>
    <?php else : ?>
        Maaf, tidak ada data yang tersedia.
    <?php endif; ?>
</body>
</html>
