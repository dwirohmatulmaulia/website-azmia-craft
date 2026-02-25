<?php
include '../../app.php';
include './show.php';
$storages = "../../../storages/set_can/";

// hapus gambar lama jika ada
if (!empty($set_cangkir->image) && file_exists($storages . $set_cangkir->image)) {
    unlink($storages . $set_cangkir->image);
}

// Hapus data
$qDelete = "DELETE FROM set_cangkir WHERE id = '$set_cangkir->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// cek apakah data berhasil di hapus atau tidak
if ($result) {
    echo " 
         <script>    
            alert('Data berhasil dihapus');
            window.location.href='../../pages/set_cangkir/index.php';
        </script>
            ";
} else {
    echo "
         <script>    
            alert('Data gagal dihapus');
            window.location.href='../../pages/set_cangkir/index.php';
         </script>
     ";
}