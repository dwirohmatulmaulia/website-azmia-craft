<?php   
$qset_cangkir = "SELECT * FROM set_cangkir";
$resultset_cangkir = mysqli_query($connect, $qset_cangkir) or die(mysqli_error($connect));
?>

<section class="popular-product" id="set_cangkir">
    <div class="container">

        <!-- JUDUL SECTION -->
        <div class="section-title">
            <h2>Koleksi Hampers Idul Fitri</h2>
            <p>Pilihan hampers spesial untuk merayakan Hari Raya</p>
        </div>

        <div class="row">

        <?php while ($item = $resultset_cangkir->fetch_object()): ?>
            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <div class="card product-card">
                    
                    <img 
                        src="../storages/set_cangkir/<?= $item->image ?>" 
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
