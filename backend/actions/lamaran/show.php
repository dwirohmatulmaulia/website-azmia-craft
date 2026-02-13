<?php
if (!isset($_GET['id'])) {
    echo "
    <script>    
        alert('Tidak bisa memilih ID ini');
        window.location.href='../../pages/lamaran/index.php';
        </script>
    ";
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM lamaran WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$lamaran = $result->fetch_object();
if (!$lamaran) {
    die("Data tidak di temukan");
}