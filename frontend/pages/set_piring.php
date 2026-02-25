<?php   
$qset_piring = "SELECT * FROM set_cangkir";
$resultset_piring = mysqli_query($connect, $qset_piring) or die(mysqli_error($connect));
?>

<style>

/* ================= SECTION ================= */
.popular-product {
    padding: 100px 0;
    background: linear-gradient(180deg, #fff8f4 0%, #ffeef5 100%);
    position: relative;
    overflow: hidden;
}

/* Glow effect */
.popular-product::before {
    content: "";
    position: absolute;
    width: 350px;
    height: 350px;
    background: rgba(214, 51, 132, 0.08);
    border-radius: 50%;
    top: -120px;
    right: -120px;
    filter: blur(120px);
}

/* ================= TITLE ================= */
.section-title {
    text-align: center;
    margin-bottom: 70px;
}

.section-title h2 {
    font-weight: 700;
    font-size: 36px;
    margin-bottom: 10px;
}

.section-title p {
    color: #777;
    font-size: 16px;
}

/* ================= CARD ================= */
.product-card {
    border-radius: 28px;
    overflow: hidden;
    background: #ffffffcc;
    backdrop-filter: blur(12px);
    box-shadow: 0 12px 35px rgba(0,0,0,0.08);
    transition: all 0.4s ease;
    max-width: 320px;   /* diperbesar */
    margin: 0 auto;
}

.product-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 45px rgba(214,51,132,0.18);
}

/* Image */
.product-card img {
    width: 100%;
    height: auto;
    aspect-ratio: 3 / 4;
    object-fit: cover;
    display: block;
    transition: transform 0.5s ease;
}

.product-card:hover img {
    transform: scale(1.08);
}

/* Body */
.card-body {
    padding: 25px;
}

.product-name {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 8px;
}

.product-category {
    font-size: 14px;
    color: #999;
    margin-bottom: 12px;
}

.card-text {
    font-size: 15px;
    margin-bottom: 18px;
}

/* Price Button */
.price-btn {
    background: linear-gradient(45deg, #d63384, #ff7eb3);
    border: none;
    padding: 12px 26px;
    border-radius: 35px;
    font-weight: 600;
    font-size: 15px;
    color: white;
    box-shadow: 0 8px 18px rgba(214,51,132,0.35);
    transition: 0.3s ease;
}

.price-btn:hover {
    transform: scale(1.05);
}

@media (max-width: 576px) {
    .product-name {
        font-size: 17px;
    }
}

</style>

<section class="popular-product">
    <div class="container">

        <div class="section-title">
            <h2>Koleksi Hampers Terbaik</h2>
            <p>Pilihan hampers eksklusif untuk berbagai momen spesial Anda</p>
        </div>

        <div class="row">

        <?php while ($item = $resultset_piring->fetch_object()): ?>
            <!-- Desktop jadi 3 kolom supaya card lebih besar -->
            <div class="col-12 col-sm-6 col-lg-4 mb-5">
                <div class="card product-card">
                    
                    <img 
                        src="../storages/set_piring/<?= $item->image ?>" 
                        alt="<?= $item->nama ?>">

                    <div class="card-body text-center">
                        
                        <h5 class="product-name">
                            <?= $item->nama ?>
                        </h5>

                        <p class="card-text text-muted">
                            <?= $item->deskripsi ?>
                        </p>

                        <button class="price-btn">
                            Rp <?= number_format($item->harga, 0, ',', '.') ?>
                        </button>

                    </div>
                </div>
            </div>
        <?php endwhile; ?>

        </div>
    </div>
</section>