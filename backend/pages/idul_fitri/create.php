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
                    <h2 class="pageheader-title">Tambah Data idul_fitri</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card m-4 p-3">
                    <div class="card-body">

                        <form action="../../actions/idul_fitri/store.php" 
                              method="post" 
                              enctype="multipart/form-data">

                            <!-- NAMA -->
                            <div class="mb-3">
                                <label class="form-label">Nama Produk</label>
                                <input type="text" 
                                       name="nama" 
                                       class="form-control"
                                       placeholder="Masukkan nama produk"
                                       required>
                            </div>

                            <!-- KATEGORI -->
                            <div class="mb-3">
                                <label class="form-label">Kategori</label>
                                <select name="kategori" class="form-control" required>
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="idul_fitri">Hampers Lebaran</option>
                                    <option value="ulang_tahun">Hampers Ulang Tahun</option>
                                    <option value="lamaran">Hampers lamaran</option>
                                </select>
                            </div>

                            <!-- DESKRIPSI -->
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" 
                                          class="form-control" 
                                          rows="4"
                                          placeholder="Masukkan deskripsi produk"
                                          required></textarea>
                            </div>

                            <!-- GAMBAR -->
                            <div class="mb-3">
                                <label for="imageInput" class="form-label">Gambar</label>
                                <input type="file" 
                                       name="image" 
                                       class="form-control" 
                                       id="imageInput" 
                                       required>
                            </div>

                            <!-- HARGA -->
                            <div class="mb-3">
                                <label for="hargaInput" class="form-label">Harga</label>
                                <input type="text" 
                                       name="harga" 
                                       class="form-control" 
                                       id="hargaInput"
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
