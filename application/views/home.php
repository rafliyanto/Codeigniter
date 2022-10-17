<div class="container-fluid">
    <div class="row">


        <?php foreach ($produk as $pro) : ?>

            <div class="card ml-5 mb-5" style="width: 18rem;">
                <img src="<?= base_url() . '/assets/img/' . $pro->gambar ?>" class="card-img-top" alt="<?= $pro->kategori; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $pro->nama_produk; ?></h5>
                    <small>Kategori : <?= $pro->kategori; ?></small>
                    <p class="card-text">Rp. <?= number_format($pro->harga, 0, ',', '.'); ?></p>
                    <?= anchor('home/tambah_keranjang/' . $pro->id_produk, '<div class="btn btn-primary">Tambah Ke Keranjang</div>') ?>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>