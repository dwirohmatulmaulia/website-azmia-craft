<?php   
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

$qkatalog ="SELECT * FROM katalog";
$result = mysqli_query($connect, $qkatalog) or die(mysqli_error($connect));
?>
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Halaman Data Katalog</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 d-flex align-items-center">
                            <span class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center mr-2"
                                style="width:35px; height:35px; font-size:19px;">
                                <i class="fa fa-ticket"></i>
                            </span>
                            Tabel Katalog
                        </h5>
                        <a href="create.php" class="btn btn-primary btn-sm d-flex align-items-center">
                            <span class="rounded-circle bg-white text-primary d-flex align-items-center justify-content-center mr-2"
                                style="width:22px; height:22px;">
                                <i class="fa fa-plus"></i>
                            </span>
                            Tambah Pemesanan
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered first">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $no = 1;
                                while ($item = $result->fetch_object()):
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $no ?></td>
                                        <td class="text-center">
                                            <img src="../../../storages/katalog/<?= $item->image ?>" alt="Gambar" width="100" height="100">
                                        </td>
                                        <td class="text-center"><?= $item->harga?></td>
                                        <td>
                                                        <div class="d-flex justify-content-center gap-2">

                                                            <a href="./edit.php?id=<?= $item->id ?>"
                                                                class="btn btn-warning btn-sm d-flex align-items-center gap-1">
                                                                <i class="ti ti-edit"></i>
                                                                Edit
                                                            </a>

                                                            <a href="../../actions/katalog/destroy.php?id=<?= $item->id ?>"
                                                                onclick="return confirm('Yakin hapus data ini?')"
                                                                class="btn btn-danger btn-sm d-flex align-items-center gap-1">
                                                                <i class="ti ti-trash"></i>
                                                                Hapus
                                                            </a>

                                                        </div>
                                                    </td>
                                    </tr>
                                <?php
                                    $no++;
                                endwhile;
                                ?>
                            </tbody>
                            </table>
                        </div>
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