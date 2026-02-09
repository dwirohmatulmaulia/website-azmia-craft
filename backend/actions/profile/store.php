<?php
include '../../app.php';

if (isset($_POST['tombol'])) {

    $imageOld = $_FILES['image']['tmp_name'];
    $imageNew = time() . ".png";
    $nama = escapeString($_POST['nama']);
    $deskripsi = escapeString($_POST['deskripsi']);

    $storages = "../../../storages/profile/";
    if (move_uploaded_file($imageOld, $storages . $imageNew)) {
        $qInsert = "INSERT INTO profile(image, nama, deskripsi) VALUES('$imageNew', '$nama', '$deskripsi')";

        mysqli_query($connect, $qInsert) or die(mysqli_error($connect));
        echo " 
    <script>    
        alert('Data berhasil ditambah');
        window.location.href='../../pages/profile/index.php';
    </script>
            ";
    } else {
        echo "
    <script>    
        alert('Data gagal ditambah');
        window.location.href='../../pages/profile/create.php';
    </script>
    ";
    }
}