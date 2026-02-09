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
                    <h2 class="pageheader-title">Edit Data social_media</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card m-4 p-3">
                    <div class="card-body">
                        <?php
                        include '../../actions/social_media/show.php';
                        ?>
                        <form action="../../actions/social_media/update.php?id=<?= $social_media->id ?>" method="post" enctype="multipart/form-data">
                           <div class="mb-3">
                                        <img class="w-25" src="../../../storages/social_media/<?= $social_media->image ?>" alt="">
                                        <label for="imageInput" class="form-label"></label>
                                        <input type="file" name="image" class="form-control" id="imageInput" required>
                                    </div>

                             <div class="mb-3">
                                <label for="linkInput" class="form-label">link</label>
                                <input type="text" name="link" class="form-control" id="linkInput" value="<?= $social_media->link ?>" placeholder="Masukkan link..." required>
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