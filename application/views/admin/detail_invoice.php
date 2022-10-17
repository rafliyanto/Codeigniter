<div class="container-fluid">
    <h4>Detail Pesanan <div class="btn btn-sm btn-success">No Invoice : <?= $invoice->id_invoice; ?></div>
    </h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Produk</th>
            <th>Nama Produk</th>
            <th>Jumlah Pesanan</th>
            <th>Harga Satuan</th>
            <th>Sub-Total</th>
        </tr>

        <?php
        $total = 0;
        foreach ($pesanan as $psn) :
            $subtotal = $psn->jumlah * $psn->harga;
            $total += $subtotal; ?>

            <tr>
                <td><?= $psn->id_produk ?></td>
                <td><?= $psn->nama_produk ?></td>
                <td><?= $psn->jumlah ?></td>
                <td><?= number_format($psn->harga, 0, ',', '.') ?></td>
                <td><?= number_format($subtotal, 0, ',', '.') ?></td>
            </tr>

        <?php endforeach ?>

        <form method="POST" action="<?= base_url('pesanan/terima/' . $psn->id_pesanan) ?>">
            <tr>
                <td colspan="3" align="right">Total Bayar</td>
                <td>Rp. <?= number_format($total, 0, ',', '.'); ?></td>
                <td align="right">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" value="1" name="status">
                        <label class="custom-control-label" for="customSwitch1"> Sudah Bayar</label>
                    </div>
                </td>

            </tr>
    </table>

    <a href="<?= base_url('admin/invoice/index'); ?>">
        <div class="btn btn-sm btn-primary">Kembali</div>
    </a>
    <button type="submit" class="btn btn-sm btn-success">Terima</button>
    <?= anchor('admin/invoice/tolak/' . $invoice->id_invoice, '<div class="btn btn-sm btn-danger">Tolak</div>') ?>
    </form>
</div>