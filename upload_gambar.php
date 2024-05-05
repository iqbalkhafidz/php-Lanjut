<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
        <p><label>Pilih Gambar yang akan di upload: </label><br>
            <input type="file" name="gambar" value="Pilih Gambar" id="gambar1"></p>
        <input type="submit" value="Upload Image" name="submit">
    </form>

    <?php 
    // cek apakah ada kiriman data dengan metode post dan file diunggah
    if(isset($_POST["submit"]) && !empty($_FILES["gambar"]["name"])) {
        $target_dir = "gambar/";
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        $uploadOk = 1;
        $tipeGambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
        // check apakah file berupa gambar
        $check = getimagesize($_FILES["gambar"]["tmp_name"]);
        if($check !== false) {
            echo "File berupa citra/gambar - " . $check["mime"] . ".";
            $uploadOk = 1;
            //simpan kedalam folder gambar
        } else {
            echo "File bukan gambar.";
            $uploadOk = 0;
        }

        // deteksi apakah ada file dengan nama yang sama
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["gambar"]["size"] > 500000) {
            echo "Sorry, file anda terlalu besar.";
            $upload0k = 0;
        }

        // Filter format
        if($tipeGambar != "jpg" && $tipeGambar != "png" && $tipeGambar != "jpeg"
            && $tipeGambar != "gif" ) {
            echo "Sorry, hanya file JPG, JPEG, PNG & GIF .";
            $upload0k = 0;
        }

        // Check if $uploadOk telah sesuai dengan kriteria
        if ($uploadOk == 0) {
            echo "Sorry, File anda gagal upload.";
        } else {
            // proses upload file
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                echo "file ". htmlspecialchars( basename( $_FILES["gambar"]["name"])). " berhasil Upload.";
            } else {
                echo "Sorry, Ada eror saat upload.";
            }
        }
    }
    ?>

</body>
</html>