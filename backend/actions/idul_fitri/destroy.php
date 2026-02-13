<?php
include '../../app.php';
include './show.php';
$storages = "../../../storages/idul_fitri/";

// hapus gambar lama jika ada
if (!empty($idul_fitri->image) && file_exists($storages . $idul_fitri->image)) {
    unlink($storages . $idul_fitri->image);
}

// Hapus data
$qDelete = "DELETE FROM idul_fitri WHERE id = '$idul_fitri->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// cek apakah data berhasil di hapus atau tidak
if ($result) {
    echo " 
         <script>    
            alert('Data berhasil dihapus');
            window.location.href='../../pages/idul_fitri/index.php';
        </script>
            ";
} else {
    echo "
         <script>    
            alert('Data gagal dihapus');
            window.location.href='../../pages/idul_fitri/index.php';
         </script>
     ";
}