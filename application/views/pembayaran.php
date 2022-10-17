<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="alert alert-success text-center">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                    echo "Total pembayaran anda : Rp. " . number_format($grand_total, 0, ',', '.');
                ?>
            </div>
            <h4 class="mt-5 text-center mb-5">MASUKAN ALAMAT PENGIRIMAN DAN PEMBAYARAN</h4>

            <form method="post" action="<?= base_url(); ?>home/proses_pesanan">
                <div class="form-group">
                    <label>Nama Lengkap Anda</label>
                    <?php foreach ($user as $u) : ?>
                        <input type="text" name="id_user" class="form-control" value="<?= $u->id_user ?>" readonly>
                    <?php endforeach; ?>
                    <input type="text" class="form-control" name="nama_lgkp" placeholder="Nama Lengkap Anda">
                </div>

                <div class="form-group">
                    <label>No Whatsapp</label>
                    <input type="text" class="form-control" name="no_wa" placeholder="No Whatsapp">
                </div>

                <div class="form-group">
                    <label>Metode Bayar</label>
                    <select class="form-control" name="metod_bayar">
                        <option>Dana</option>
                        <option>Ovo</option>
                        <option>Gopay</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Nama Akun Pembayaran</label>
                    <input type="text" class="form-control" name="nama_akun" placeholder="Nama Akun Pembayaran">
                </div>

                <div class="form-group">
                    <label>Alamat Penerima</label>
                    <textarea class="form-control" name="alamat" rows="3"></textarea>
                </div>

                <hr>
                <button class="btn btn-primary mt-3 mb-5" type="submit">Lanjut Pemesanan</button>
            </form>
        <?php
                } else {
                    echo "Keranjang anda masih kosong";
                } ?>
        </div>
    </div>
</div>