<?php
$qProfile = "SELECT * FROM profile LIMIT 1";
$resultProfile = mysqli_query($connect, $qProfile) or die(mysqli_error($connect));
$profile = mysqli_fetch_object($resultProfile);
?>

<style>
.hero-full {
    height: 100vh; /* full 1 layar */
    background: url('../storages/profile/<?= $profile->banner ?? '' ?>') no-repeat center center/cover;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
}

/* overlay biar teks tetap kebaca */
.hero-full::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.4);
}

.hero-content {
    position: relative;
    text-align: center;
    color: white;
    z-index: 2;
}

.hero-content h1 {
    font-size: 48px;
    font-weight: 700;
}

.hero-content p {
    font-size: 18px;
    margin-bottom: 20px;
}

.hero-content .btn {
    background-color: #c8a96a;
    border: none;
}

.hero-content .btn:hover {
    background-color: #b89655;
}
</style>

<section class="hero-full">
    <div class="hero-content">
        <h1><?= $profile->nama ?? 'Azmia Craft' ?></h1>
        <p><?= $profile->deskripsi ?? 'Hampers premium untuk momen spesial Anda.' ?></p>
        <a href="#katalog" class="btn btn-dark px-4 py-2">
            Lihat Katalog
        </a>
    </div>
</section>
