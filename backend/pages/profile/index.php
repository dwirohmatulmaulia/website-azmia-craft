<?php   
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$query  = "SELECT * FROM profile";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
?>

<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">

        <div class="row">
            <div class="col-xl-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Halaman Data Profile</h2>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Tabel Profile</h5>
                <a href="create.php" class="btn btn-primary btn-sm">
                    <i class="fa fa-plus"></i> Tambah
                </a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Logo</th>
                                <th>Banner</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php 
                        $no = 1;
                        while ($item = $result->fetch_object()):
                        ?>
                            <tr>
                                <td class="text-center"><?= $no++ ?></td>

                                <!-- LOGO -->
                                <td class="text-center">
                                    <?php if (!empty($item->logo) && file_exists("../../../storages/profile/" . $item->logo)) : ?>
                                        <img src="../../../storages/profile/<?= $item->logo ?>" 
                                             style="width:80px; height:80px; object-fit:cover; border-radius:8px;">
                                    <?php else: ?>
                                        <span class="text-muted">Tidak ada</span>
                                    <?php endif; ?>
                                </td>

                                <!-- BANNER -->
                                <td class="text-center">
                                    <?php if (!empty($item->banner) && file_exists("../../../storages/profile/" . $item->banner)) : ?>
                                        <img src="../../../storages/profile/<?= $item->banner ?>" 
                                             style="width:120px; height:80px; object-fit:cover; border-radius:8px;">
                                    <?php else: ?>
                                        <span class="text-muted">Tidak ada</span>
                                    <?php endif; ?>
                                </td>

                                <td><?= $item->nama ?></td>
                                <td><?= $item->deskripsi ?></td>
                                <td><?= $item->alamat ?></td>

                                <td class="text-center">
                                    <a href="edit.php?id=<?= $item->id ?>" 
                                       class="btn btn-warning btn-sm">
                                       Edit
                                    </a>

                                    <a href="../../actions/profile/destroy.php?id=<?= $item->id ?>"
                                       onclick="return confirm('Yakin hapus data ini?')"
                                       class="btn btn-danger btn-sm">
                                       Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<?php
include '../../partials/footer.php';
include '../../partials/script.php';
?>
