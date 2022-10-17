<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Permata Printing</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<nav class="navbar bg-primary fixed-top justify-content-center">
    <a class="navbar-brand text-white" href="<?= base_url('auth/login'); ?>">Permata</a>

    <div class="nav-item" id="navbarsExampleDefault">
        <a class="btn btn-light my-2 my-sm-0" href="<?= base_url('auth/login'); ?>">Login</a>
    </div>
</nav>

<div class="container mt-5">
    <div class="card mt-5">
        <div class="card-body">

            <h4 class="text-center mb-3 mt-3"><b>DETAIL PRODUK</b></h4>

            <?php foreach ($detail as $dt) : ?>

                <div class="row">
                    <div class="col-md-6">
                        <img src="<?= base_url() . '/assets/img/' . $dt->gambar ?>" class="card-img-top" alt="<?= $dt->kategori; ?>">
                    </div>
                    <div class="col-md-6">
                        <table class="table table-bordered table-hover table-striped">
                            <tr>
                                <th>Produk</th>
                                <td><?= $dt->nama_produk ?></td>
                            </tr>
                            <tr>
                                <th>Kategori</th>
                                <td><?= $dt->kategori ?></td>
                            </tr>
                            <tr>
                                <th>Harga</th>
                                <td>Rp <?= number_format($dt->harga, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <th>Ukuran</th>
                                <td><?= $dt->ukuran ?></td>
                            </tr>
                            <tr>
                                <th>Bahan</th>
                                <td><?= $dt->bahan ?></td>
                            </tr>
                        </table>
                        <a href="<?= base_url('auth/login') ?>">
                            <div class="btn btn-success">Pilih</div>
                        </a>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url(); ?>assets/js/demo/chart-area-demo.js"></script>
<script src="<?= base_url(); ?>assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>