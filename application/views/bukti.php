<div class="container-fluid">
    <h4>Cetak</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>No</th>
            <th>Nama User</th>
            <th>Nama Akun</th>
            <th>Pembayaran Via</th>
            <th>Pilihan</th>
        </tr>

        <?php
        $no = 1;
        foreach ($proses as $prs) : ?>
            <?php if ($prs->status == "1" && $prs->id_user == $this->session->userdata('id_user')) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $prs->nama_lgkp ?></td>
                    <td><?= $prs->nama_akun ?></td>
                    <td align="center"><?= $prs->metod_bayar ?></td>
                    <td align="center">
                        <?= anchor('pesanan/cetak/' . $prs->id_invoice, '
                     <div class="btn btn-success btn-sm">Unduh Bukti</div>'); ?>
                    </td>
                </tr>
            <?php } ?>

        <?php endforeach ?>
    </table>
</div>