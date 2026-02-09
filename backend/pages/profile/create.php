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
                    <h2 class="pageheader-title">Tambah Data Profile</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card m-4 p-3">
                    <div class="card-body">
                        <form action="../../actions/profile/store.php" method="post" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label for="imageInput" class="form-label">Gambar</label>
                                <input type="file" name="image" class="form-control" id="imageInput" placeholder="Masuk gambar..." required>
                            </div>

                             <div class="mb-3">
                                <label for="namaInput" class="form-label">NAMA</label>
                                <input type="text" name="nama" class="form-control" id="namaInput" placeholder="Masukkan nama..." required>
                            </div>

                             <div class="mb-3">
                                <label for="deskripsiInput" class="form-label">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" id="deskripsiInput" placeholder="Masukkan deskripsi..." required>
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
<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>