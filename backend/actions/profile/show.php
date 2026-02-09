<?php
if (!isset($_GET['id'])) {
    echo "
    <script>    
        alert('Tidak bisa memilih ID ini');
        window.location.href='../../pages/profile/index.php';
        </script>
    ";
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM profile WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$profile = $result->fetch_object();
if (!$profile) {
    die("Data tidak di temukan");
}