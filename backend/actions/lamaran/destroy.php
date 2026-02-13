<?php
include '../../app.php';
include './show.php';
$storages = "../../../storages/lamaran/";

// hapus gambar lama jika ada
if (!empty($lamaran->image) && file_exists($storages . $lamaran->image)) {
    unlink($storages . $lamaran->image);
}

// Hapus data
$qDelete = "DELETE FROM lamaran WHERE id = '$lamaran->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// cek apakah data berhasil di hapus atau tidak
if ($result) {
    echo " 
         <script>    
            alert('Data berhasil dihapus');
            window.location.href='../../pages/lamaran/index.php';
        </script>
            ";
} else {
    echo "
         <script>    
            alert('Data gagal dihapus');
            window.location.href='../../pages/lamaran/index.php';
         </script>
     ";
}