 <div class="container-fluid">
     <h4>Invoice Pesanan Pelanggan</h4>

     <table class="table table-bordered table-hover table-striped">
         <tr>
             <th>Id Invoice</th>
             <th>Nama Pelanggan</th>
             <th>No Whatsapp</th>
             <th>Metod Bayar</th>
             <th>Nama Akun Pembayaran</th>
             <th>Alamat Penerima</th>
             <th>Waktu Pemesanan</th>
             <th>Batas Pembayaran</th>
             <th>Pilihan</th>
         </tr>

         <?php if (!empty($invoice)) { ?>
             <?php foreach ($invoice as $inv) : ?>

                 <tr>
                     <td><?= $inv->id_invoice ?></td>
                     <td><?= $inv->nama_lgkp ?></td>
                     <td><?= $inv->no_wa ?></td>
                     <td><?= $inv->metod_bayar ?></td>
                     <td><?= $inv->nama_akun ?></td>
                     <td><?= $inv->alamat ?></td>
                     <td><?= $inv->tgl_pesan ?></td>
                     <td><?= $inv->batas_bayar ?></td>
                     <td><?= anchor('admin/invoice/detail/' . $inv->id_invoice, '<div class="btn btn-success btn-sm">Detail</div>'); ?>
                     </td>
                 </tr>

             <?php endforeach ?>
             <?php } else { ?><?php } ?>
     </table>
 </div>