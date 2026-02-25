<?php
$qProfile = "SELECT * FROM profile LIMIT 1";
$resultProfile = mysqli_query($connect, $qProfile) or die(mysqli_error($connect));
$profile = mysqli_fetch_object($resultProfile);
?>

<style>
.hero-full {
    height: 100vh;
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
    inset: 0;
    background: rgba(0,0,0,0.45);
}

.hero-content {
    position: relative;
    text-align: center;
    z-index: 2;
}

/* ====== JUDUL AZMIA CRAFT ====== */
.hero-content h1 {
    font-family: 'Playfair Display', serif !important;
    font-size: 72px;
    font-weight: 700;
    letter-spacing: 2px;
    background: linear-gradient(90deg,#d4af37,#f9e5a4);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* ====== DESKRIPSI ====== */
.hero-content p {
    font-family: 'Poppins', sans-serif;
    font-size: 18px;
    letter-spacing: 1px;
    color: #f1f1f1;
}

/* ====== BUTTON ====== */
.hero-content .btn {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(45deg,#d4af37,#f9e5a4);
    border-radius: 40px;
    padding: 12px 30px;
    border: none;
    color: #333 !important;
    font-weight: 500;
    transition: 0.3s ease;
}

.hero-content .btn:hover {
    transform: scale(1.05);
    background: linear-gradient(45deg,#c8a233,#f7da86);
}
</style>

<section class="hero-full">
    <div class="hero-content">
        <h1><?= $profile->nama ?? 'Azmia Craft' ?></h1>
        <p><?= $profile->deskripsi ?? 'Hampers premium untuk momen spesial Anda.' ?></p>
        <a href="#populer_product" id="populer_product" class="btn btn-dark px-4 py-2">
            Lihat Katalog
        </a>
    </div>
    
</section>
<!-- <section id="populer_product" class="popular-product"> <div class="container"> <h2 class="text-center mb-5"></h2> </div> </section> -->
