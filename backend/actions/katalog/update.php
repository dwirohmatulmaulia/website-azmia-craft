<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    $imageNew = $katalog->image;
    $harga = preg_replace('/[^0-9]/', '', $_POST['harga']);
    $deskripsi= escapeString($_POST['deskripsi']);
    $nama= escapeString($_POST['nama']);
    $kategori= escapeString($_POST['kategori']);
    $storages = "../../../storages/katalog/";

    //cek apakah user mengupload gambar baru
    if (!empty($_FILES['image']['tmp_name'])) {
        $imageOld = $_FILES['image']['tmp_name'];
        $imageNew = time() . '.png';

        // hapus gambar lama jika ada
        if (!empty($katalog->image) && file_exists($storages . $katalog->image)) {
            unlink($storages . $katalog->image);
        }

        // simpan gambar baru
        move_uploaded_file($imageOld, $storages . $imageNew);
    }

    $qUpdate = "UPDATE katalog SET image='$imageNew', harga='$harga', deskripsi='$deskripsi', nama='$nama', kategori='$kategori' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result) {
        echo " 
         <script>    
            alert('Data berhasil diubah');
            window.location.href='../../pages/katalog/index.php';
        </script>
            ";
    } else {
        echo "
         <script>    
            alert('Data gagal diubah');
            window.location.href='../../pages/katalog/create.php';
         </script>
     ";
    }
}