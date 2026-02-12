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

                            <!-- Logo -->
                            <div class="mb-3">
                                <label for="logoInput" class="form-label">Logo</label>
                                <input type="file" name="logo" class="form-control" id="logoInput" required>
                            </div>

                            <!-- Banner -->
                            <div class="mb-3">
                                <label for="bannerInput" class="form-label">Banner</label>
                                <input type="file" name="banner" class="form-control" id="bannerInput" required>
                            </div>

                            <!-- Nama -->
                            <div class="mb-3">
                                <label for="namaInput" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="namaInput" placeholder="Masukkan nama..." required>
                            </div>

                            <!-- Deskripsi -->
                            <div class="mb-3">
                                <label for="deskripsiInput" class="form-label">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" id="deskripsiInput" placeholder="Masukkan deskripsi..." required>
                            </div>

                            <!-- Alamat -->
                            <div class="mb-3">
                                <label for="alamatInput" class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="alamatInput" placeholder="Masukkan alamat..." required>
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
