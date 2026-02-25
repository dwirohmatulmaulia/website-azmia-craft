<?php
include '../../app.php';
include './show.php';
$storages = "../../../storages/set_piring/";

// hapus gambar lama jika ada
if (!empty($set_piring->image) && file_exists($storages . $set_piring->image)) {
    unlink($storages . $set_piring->image);
}

// Hapus data
$qDelete = "DELETE FROM set_piring WHERE id = '$set_piring->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// cek apakah data berhasil di hapus atau tidak
if ($result) {
    echo " 
         <script>    
            alert('Data berhasil dihapus');
            window.location.href='../../pages/set_piring/index.php';
        </script>
            ";
} else {
    echo "
         <script>    
            alert('Data gagal dihapus');
            window.location.href='../../pages/set_piring/index.php';
         </script>
     ";
}