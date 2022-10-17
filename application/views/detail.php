<div class="container">

    <div class="card">

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
                        <?= anchor('home/tambah_keranjang/' . $dt->id_produk, '<div class="btn btn-primary">Tambah Keranjang</div>') ?>
                        <a href="<?= base_url('home') ?>">
                            <div class="btn btn-warning ml-2">Kembali</div>
                        </a>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</div>