<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    $imageNew = $set_piring->image;
    $harga = preg_replace('/[^0-9]/', '', $_POST['harga']);
    $deskripsi= escapeString($_POST['deskripsi']);
    $nama= escapeString($_POST['nama']);
    $storages = "../../../storages/set_piring/";

    //cek apakah user mengupload gambar baru
    if (!empty($_FILES['image']['tmp_name'])) {
        $imageOld = $_FILES['image']['tmp_name'];
        $imageNew = time() . '.png';

        // hapus gambar lama jika ada
        if (!empty($set_piring->image) && file_exists($storages . $set_piring->image)) {
            unlink($storages . $set_piring->image);
        }

        // simpan gambar baru
        move_uploaded_file($imageOld, $storages . $imageNew);
    }

    $qUpdate = "UPDATE set_piring SET image='$imageNew', harga='$harga', deskripsi='$deskripsi', nama='$nama'  WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result) {
        echo " 
         <script>    
            alert('Data berhasil diubah');
            window.location.href='../../pages/set_piring/index.php';
        </script>
            ";
    } else {
        echo "
         <script>    
            alert('Data gagal diubah');
            window.location.href='../../pages/set_piring/create.php';
         </script>
     ";
    }
}