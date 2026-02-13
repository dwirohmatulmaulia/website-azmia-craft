<?php
include '../../app.php';

if (isset($_POST['tombol'])) {

    $imageOld = $_FILES['image']['tmp_name'];
    $imageNew = time() . ".png";
    $harga = preg_replace('/[^0-9]/', '', $_POST['harga']);
    $deskripsi = escapeString($_POST['deskripsi']);
    $nama = escapeString($_POST['nama']);
    $kategori = escapeString($_POST['kategori']);

    $storages = "../../../storages/lamaran/";
    if (move_uploaded_file($imageOld, $storages . $imageNew)) {
        $qInsert = "INSERT INTO lamaran(image, harga, deskripsi, nama, kategori) VALUES('$imageNew', '$harga', '$deskripsi', '$nama', '$kategori')";

        mysqli_query($connect, $qInsert) or die(mysqli_error($connect));
        echo " 
    <script>    
        alert('Data berhasil ditambah');
        window.location.href='../../pages/lamaran/index.php';
    </script>
            ";
    } else {
        echo "
    <script>    
        alert('Data gagal ditambah');
        window.location.href='../../pages/lamaran/create.php';
    </script>
    ";
    }
}