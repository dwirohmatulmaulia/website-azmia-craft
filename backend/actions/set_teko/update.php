<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    $imageNew = $set_teko->image;
    $harga = preg_replace('/[^0-9]/', '', $_POST['harga']);
    $deskripsi= escapeString($_POST['deskripsi']);
    $nama= escapeString($_POST['nama']);
    $storages = "../../../storages/set_teko/";

    //cek apakah user mengupload gambar baru
    if (!empty($_FILES['image']['tmp_name'])) {
        $imageOld = $_FILES['image']['tmp_name'];
        $imageNew = time() . '.png';

        // hapus gambar lama jika ada
        if (!empty($set_teko->image) && file_exists($storages . $set_teko->image)) {
            unlink($storages . $set_teko->image);
        }

        // simpan gambar baru
        move_uploaded_file($imageOld, $storages . $imageNew);
    }

    $qUpdate = "UPDATE ulang_tahun SET image='$imageNew', harga='$harga', deskripsi='$deskripsi', nama='$nama' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result) {
        echo " 
         <script>    
            alert('Data berhasil diubah');
            window.location.href='../../pages/ulang_tahun/index.php';
        </script>
            ";
    } else {
        echo "
         <script>    
            alert('Data gagal diubah');
            window.location.href='../../pages/ulang_tahun/create.php';
         </script>
     ";
    }
}