<div class="container-fluid">
    <h4>Keranjang Anda</h4>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jumlah</th>
            <th>harga</th>
            <th>Sub-Total</th>
        </tr>

        <?php
        $no = 1;
        foreach ($this->cart->contents() as $items) : ?>
            <tr>
                <th><?= $no++ ?></th>
                <th><?= $items['name']; ?></th>
                <th><?= $items['qty']; ?></th>
                <th>Rp. <?= $items['price']; ?></th>
                <th>Rp. <?= $items['subtotal']; ?></th>
            </tr>
        <?php endforeach ?>

        <tr>
            <td colspan="4"></td>
            <td align="right">Rp. <?= number_format($this->cart->total(), 0, ',', '.') ?></td>
        </tr>
    </table>

    <div align="right">
        <a href="<?= base_url('home/hapus_keranjang') ?>">
            <div class="btn btn-sm btn-danger">Hapus Keranjang</div>
        </a>
        <a href="<?= base_url('home') ?>">
            <div class="btn btn-sm btn-success">Lanjut Belanja</div>
        </a>
        <a href="<?= base_url('home/pembayaran') ?>">
            <div class="btn btn-sm btn-primary">Pesan</div>
        </a>
    </div>
</div>