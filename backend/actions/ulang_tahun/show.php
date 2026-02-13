<?php
if (!isset($_GET['id'])) {
    echo "
    <script>    
        alert('Tidak bisa memilih ID ini');
        window.location.href='../../pages/ulang_tahun/index.php';
        </script>
    ";
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM ulang_tahun WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$ulang_tahun = $result->fetch_object();
if (!$ulang_tahun) {
    die("Data tidak di temukan");
}