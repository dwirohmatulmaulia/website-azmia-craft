<?php
if (!isset($_GET['id'])) {
    echo "
    <script>    
        alert('Tidak bisa memilih ID ini');
        window.location.href='../../pages/idul_fitri/index.php';
        </script>
    ";
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM idul_fitri WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$idul_fitri = $result->fetch_object();
if (!$idul_fitri) {
    die("Data tidak di temukan");
}