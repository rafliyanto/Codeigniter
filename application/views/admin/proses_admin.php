<div class="container-fluid">
    <h4>Proses Pesanan Pelanggan</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>No</th>
            <th>Nama User</th>
            <th>Nama Akun</th>
            <th>Pembayaran Via</th>
            <th>Status</th>
        </tr>

        <?php
        $no = 1;
        foreach ($proses as $prs) : ?>
            <?php if ($prs->status == "1") { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $prs->nama_lgkp ?></td>
                    <td><?= $prs->nama_akun ?></td>
                    <td><?= $prs->metod_bayar ?></td>
                    <td align="center"><?php if ($prs->status == "1") { ?>
                            <div class="btn btn-sm btn-success">Lunas</div>
                        <?php } ?></td>
                </tr>
            <?php } ?>

        <?php endforeach ?>
    </table>
</div>