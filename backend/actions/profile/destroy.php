<?php
include '../../app.php';
include './show.php';
$storages = "../../../storages/profile/";

// hapus gambar lama jika ada
if (!empty($profile->image) && file_exists($storages . $profile->image)) {
    unlink($storages . $profile->image);
}

// Hapus data
$qDelete = "DELETE FROM profile WHERE id = '$profile->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// cek apakah data berhasil di hapus atau tidak
if ($result) {
    echo " 
         <script>    
            alert('Data berhasil dihapus');
            window.location.href='../../pages/profile/index.php';
        </script>
            ";
} else {
    echo "
         <script>    
            alert('Data gagal dihapus');
            window.location.href='../../pages/profile/index.php';
         </script>
     ";
}