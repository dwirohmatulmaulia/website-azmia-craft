<?php   
$qKatalog = "SELECT * FROM katalog";
$resultKatalog = mysqli_query($connect, $qKatalog) or die(mysqli_error($connect));
?>

<style>
.popular-product {
    margin-top: 40px;
}

/* Card */
.product-card {
    border: none;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 6px 18px rgba(0,0,0,0.08);
    transition: 0.3s ease;
    background: #fff;
}

.product-card:hover {
    transform: translateY(-5px);
}

/* Gambar mengikuti ukuran asli */
.product-card img {
    width: 100%;
    height: 390px; /* penting supaya proporsional */
    display: block;
}

/* Card body lebih compact */
.card-body {
    padding: 18px;
}

/* Text */
.product-name {
    font-size: 17px;
    font-weight: 600;
    margin-bottom: 6px;
}

.product-category {
    font-size: 13px;
    color: #888;
    margin-bottom: 8px;
}

.card-text {
    font-size: 14px;
    margin-bottom: 12px;
}

/* Button */
.price-btn {
    background-color: #d63384;
    color: white;
    border: none;
    padding: 8px 20px;
    border-radius: 25px;
    font-weight: 600;
    transition: 0.3s;
}

.price-btn:hover {
    background-color: #b0256b;
}

/* Responsive */
@media (max-width: 576px) {
    .product-name {
        font-size: 16px;
    }
}
</style>

<div class="popular-product">
    <div class="container">
        <div class="row">

        <?php while ($item = $resultKatalog->fetch_object()): ?>
            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <div class="card product-card">
                    
                    <img 
                        src="../storages/katalog/<?= $item->image ?>" 
                        alt="<?= $item->nama ?>">

                    <div class="card-body text-center">
                        
                        <h5 class="product-name">
                            <?= $item->nama ?>
                        </h5>

                        <p class="product-category">
                            <?= ucfirst(str_replace('_', ' ', $item->kategori)) ?>
                        </p>

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
</div>
