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
                    <h2 class="pageheader-title">Edit Data Profile</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card m-4 p-3">
                    <div class="card-body">

                        <?php
                        include '../../actions/profile/show.php';
                        ?>

                        <form action="../../actions/profile/update.php?id=<?= $profile->id ?>" 
                              method="post" 
                              enctype="multipart/form-data">

                            <!-- LOGO -->
                            <div class="mb-3">
                                <label class="form-label">Logo</label><br>
                                <img class="w-25 mb-2" 
                                     src="../../../storages/profile/<?= $profile->logo ?>" 
                                     alt="Logo">
                                <input type="file" name="logo" class="form-control">
                            </div>

                            <!-- BANNER -->
                            <div class="mb-3">
                                <label class="form-label">Banner</label><br>
                                <img class="w-25 mb-2" 
                                     src="../../../storages/profile/<?= $profile->banner ?>" 
                                     alt="Banner">
                                <input type="file" name="banner" class="form-control">
                            </div>

                            <!-- NAMA -->
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" 
                                       name="nama" 
                                       class="form-control" 
                                       value="<?= $profile->nama ?>" 
                                       required>
                            </div>

                            <!-- DESKRIPSI -->
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <input type="text" 
                                       name="deskripsi" 
                                       class="form-control" 
                                       value="<?= $profile->deskripsi ?>" 
                                       required>
                            </div>

                            <!-- ALAMAT -->
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <input type="text" 
                                       name="alamat" 
                                       class="form-control" 
                                       value="<?= $profile->alamat ?>" 
                                       required>
                            </div>

                            <button type="submit" 
                                    class="btn btn-success" 
                                    name="tombol">
                                Simpan
                            </button>

                            <a href="./index.php" class="btn btn-primary">
                                Kembali
                            </a>

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
