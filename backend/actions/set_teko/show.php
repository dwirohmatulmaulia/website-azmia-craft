<?php
if (!isset($_GET['id'])) {
    echo "
    <script>    
        alert('Tidak bisa memilih ID ini');
        window.location.href='../../pages/set_teko/index.php';
        </script>
    ";
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM set_teko WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$set_teko = $result->fetch_object();
if (!$set_teko) {
    die("Data tidak di temukan");
}