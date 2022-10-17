<div>
    <h4>Bukti Pembayaran</h4>

    <table>

        <th>No |</th>
        <th>Nama Produk |</th>
        <th>Jumlah |</th>
        <th>Harga |</th>
        <th>Subtotal</th>

        <?php
        $total = 0;
        $no = 1;
        foreach ($pesanan as $psn) :
            $subtotal = $psn->jumlah * $psn->harga;
            $total += $subtotal; ?>

            <tr align="center">
                <td><?= $no++ ?></td>
                <td><?= $psn->nama_produk ?></td>
                <td><?= $psn->jumlah ?></td>
                <td><?= number_format($psn->harga, 0, ',', '.') ?></td>
                <td><?= number_format($subtotal, 0, ',', '.') ?></td>
            </tr>

        <?php endforeach ?>
    </table>


    <table>

        <tr>
            <td>
                <p>----------------------------------------</p>
            </td>
        </tr>

        <tr>
            <td>Nama Pemesan</td>
            <td>:</td>
            <td><?= $invoice->nama_lgkp ?></td>
        </tr>

        <tr>
            <td>Nama Akun Pembayaran</td>
            <td>:</td>
            <td><?= $invoice->nama_akun ?></td>
        </tr>

        <tr>
            <td>Tanggal Pemesanan</td>
            <td>:</td>
            <td><?= $invoice->tgl_pesan ?></td>
        </tr>

        <tr>
            <td>Pembayaran Via</td>
            <td>:</td>
            <td><?= $invoice->metod_bayar ?></td>
        </tr>

        <tr>
            <td>Jumlah Pembayaran</td>
            <td>:</td>
            <td>Rp. <?= number_format($total, 0, ',', '.'); ?></td>
        </tr>

        <tr>
            <td>Dengan Pembayaran Dinyatakan</td>
            <td>:</td>
            <td><b>LUNAS</b></td>
        </tr>

        <tr>
            <td>
                <p>----------------------------------------</p>
            </td>
        </tr>

        <tr>
            <td>
                <p>Silahkan tunjukan bukti ini untuk menerima<br> pesanan anda, terima kasih!</p>
            </td>
        </tr>


    </table>

</div>

<script type="text/javascript">
    window.print();
</script>