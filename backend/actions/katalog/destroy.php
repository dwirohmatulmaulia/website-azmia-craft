<?php
include '../../app.php';
include './show.php';
$storages = "../../../storages/katalog/";

// hapus gambar lama jika ada
if (!empty($katalog->image) && file_exists($storages . $katalog->image)) {
    unlink($storages . $katalog->image);
}

// Hapus data
$qDelete = "DELETE FROM katalog WHERE id = '$katalog->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// cek apakah data berhasil di hapus atau tidak
if ($result) {
    echo " 
         <script>    
            alert('Data berhasil dihapus');
            window.location.href='../../pages/katalog/index.php';
        </script>
            ";
} else {
    echo "
         <script>    
            alert('Data gagal dihapus');
            window.location.href='../../pages/katalog/index.php';
         </script>
     ";
}