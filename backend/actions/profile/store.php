<?php
include '../../app.php';

if (isset($_POST['tombol'])) {

    $nama = escapeString($_POST['nama']);
    $deskripsi = escapeString($_POST['deskripsi']);
    $alamat = escapeString($_POST['alamat']);

    $bannerName = "";
    $logoName   = "";

    /* ======================
       Upload Banner
    ====================== */
    if (!empty($_FILES['banner']['name'])) {

        $bannerTmp  = $_FILES['banner']['tmp_name'];
        $bannerExt  = pathinfo($_FILES['banner']['name'], PATHINFO_EXTENSION);
        $bannerName = uniqid() . "_banner." . $bannerExt;
        $bannerPath = "../../../storages/profile/" . $bannerName;

        move_uploaded_file($bannerTmp, $bannerPath);
    }

    /* ======================
       Upload Logo
    ====================== */
    if (!empty($_FILES['logo']['name'])) {

        $logoTmp  = $_FILES['logo']['tmp_name'];
        $logoExt  = pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
        $logoName = uniqid() . "_logo." . $logoExt;
        $logoPath = "../../../storages/profile/" . $logoName;

        move_uploaded_file($logoTmp, $logoPath);
    }

    /* ======================
       Insert ke Database
    ====================== */
    $qInsert = "INSERT INTO profile (nama, deskripsi, alamat, banner, logo)
                VALUES ('$nama', '$deskripsi', '$alamat', '$bannerName', '$logoName')";

    $query = mysqli_query($connect, $qInsert);

    if ($query) {
        echo "
        <script>
            alert('Data berhasil ditambahkan');
            window.location.href='../../pages/profile/index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal ditambahkan');
            window.location.href='../../pages/profile/create.php';
        </script>
        ";
    }
}
?>
