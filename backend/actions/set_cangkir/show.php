<?php
if (!isset($_GET['id'])) {
    echo "
    <script>    
        alert('Tidak bisa memilih ID ini');
        window.location.href='../../pages/set_cangkir/index.php';
        </script>
    ";
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM set_cangkir WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$set_cangkir = $result->fetch_object();
if (!$set_cangkir) {
    die("Data tidak di temukan");
}