<?php
if (!isset($_GET['id'])) {
    echo "
    <script>    
        alert('Tidak bisa memilih ID ini');
        window.location.href='../../pages/set_piring/index.php';
        </script>
    ";
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM set_piring WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$set_piring = $result->fetch_object();
if (!$set_piring) {
    die("Data tidak di temukan");
}