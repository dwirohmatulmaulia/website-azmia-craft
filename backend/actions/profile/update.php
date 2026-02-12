<?php
include '../../app.php';
include './show.php'; // pastikan di dalamnya ada $profile dan $id

if (isset($_POST['tombol'])) {

    $nama      = escapeString($_POST['nama']);
    $deskripsi = escapeString($_POST['deskripsi']);
    $alamat    = escapeString($_POST['alamat']);

    $storages = "../../../storages/profile/";

    $bannerNew = $profile->banner;
    $logoNew   = $profile->logo;

    /* =========================
       UPDATE BANNER
    ========================== */
    if (!empty($_FILES['banner']['tmp_name'])) {

        $bannerTmp  = $_FILES['banner']['tmp_name'];
        $bannerExt  = pathinfo($_FILES['banner']['name'], PATHINFO_EXTENSION);
        $bannerNew  = time() . "_banner." . $bannerExt;

        // hapus banner lama
        if (!empty($profile->banner) && file_exists($storages . $profile->banner)) {
            unlink($storages . $profile->banner);
        }

        move_uploaded_file($bannerTmp, $storages . $bannerNew);
    }

    /* =========================
       UPDATE LOGO
    ========================== */
    if (!empty($_FILES['logo']['tmp_name'])) {

        $logoTmp  = $_FILES['logo']['tmp_name'];
        $logoExt  = pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
        $logoNew  = time() . "_logo." . $logoExt;

        // hapus logo lama
        if (!empty($profile->logo) && file_exists($storages . $profile->logo)) {
            unlink($storages . $profile->logo);
        }

        move_uploaded_file($logoTmp, $storages . $logoNew);
    }

    /* =========================
       UPDATE DATABASE
    ========================== */
    $qUpdate = "UPDATE profile 
                SET nama='$nama',
                    deskripsi='$deskripsi',
                    alamat='$alamat',
                    banner='$bannerNew',
                    logo='$logoNew'
                WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate);

    if ($result) {
        echo "
        <script>
            alert('Data berhasil diubah');
            window.location.href='../../pages/profile/index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal diubah');
            window.location.href='../../pages/profile/create.php';
        </script>
        ";
    }
}
?>
