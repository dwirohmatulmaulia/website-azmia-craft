<?php   
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';
?>

<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Edit Data Katalog</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card m-4 p-3">
                    <div class="card-body">

                        <?php include '../../actions/katalog/show.php'; ?>

                        <form action="../../actions/katalog/update.php?id=<?= $katalog->id ?>" 
                              method="post" 
                              enctype="multipart/form-data">

                            <!-- IMAGE -->
                            <div class="mb-3">
                                <img class="w-25 mb-2" 
                                     src="../../../storages/katalog/<?= $katalog->image ?>" 
                                     alt="">
                                <label class="form-label">Gambar Produk</label>
                                <input type="file" name="image" class="form-control" id="imageInput">
                            </div>

                            <!-- NAMA -->
                            <div class="mb-3">
                                <label class="form-label">Nama Produk</label>
                                <input type="text" 
                                       name="nama" 
                                       class="form-control"
                                       value="<?= $katalog->nama ?>"
                                       placeholder="Masukkan nama produk"
                                       required>
                            </div>

                            <!-- KATEGORI -->
                            <div class="mb-3">
                                <label class="form-label">Kategori</label>
                                <select name="kategori" class="form-control" required>
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="idul_fitri" 
                                        <?= $katalog->kategori == 'idul_fitri' ? 'selected' : '' ?>>
                                        idul_fitri
                                    </option>
                                    <option value="ulang_tahun" 
                                        <?= $katalog->kategori == 'Ulang_Tahun' ? 'selected' : '' ?>>
                                      Ulang Tahun
                                    </option>
                                    <option value="lamaran" 
                                        <?= $katalog->kategori == 'lamaran' ? 'selected' : '' ?>>
                                        lamaran
                                    </option>
                                </select>
                            </div>

                            <!-- DESKRIPSI -->
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" 
                                          class="form-control" 
                                          rows="4"
                                          placeholder="Masukkan deskripsi produk"
                                          required><?= $katalog->deskripsi ?></textarea>
                            </div>

                            <!-- HARGA -->
                            <div class="mb-3">
                                <label for="hargaInput" class="form-label">Harga</label>
                                <input type="text" 
                                       name="harga" 
                                       class="form-control" 
                                       id="hargaInput"
                                       value="<?= number_format($katalog->harga, 0, '', '.') ?>"
                                       placeholder="Masukkan harga" 
                                       required>
                            </div>

                            <button type="submit" class="btn btn-success" name="tombol">Simpan</button>
                            <a href="./index.php" class="btn btn-primary">Kembali</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('hargaInput').addEventListener('input', function () {
    let value = this.value.replace(/\D/g, '');
    this.value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
});
</script>

<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>
