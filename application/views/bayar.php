<div class="container-fluid">
    <div class="row">

        <div class="col-md-8">

            <div class="card" style="width: 18rem;">

                <?php if ($invoice->metod_bayar == "Dana") { ?>
                    <img class="card-img-top" src="<?= base_url('/assets/img/barcodedana.png') ?>" alt="Card image cap">

                <?php } elseif ($invoice->metod_bayar == "Ovo") { ?>
                    <img class="card-img-top" src="<?= base_url('/assets/img/barcodeovo.png') ?>" alt="Card image cap">

                <?php } else { ?>
                    <img class="card-img-top" src="<?= base_url('/assets/img/barcodegopay.png') ?>" alt="Card image cap">

                <?php } ?>

                <div class="card-body">
                    <h5 class="card-title">Nama Akun : <?= $invoice->nama_akun; ?></h5>
                    <p class="card-text">Scan barcode diatas untuk membayar via <?= $invoice->metod_bayar; ?></p>
                </div>

            </div>

        </div>

    </div>
</div>