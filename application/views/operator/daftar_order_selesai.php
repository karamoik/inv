<div class="container">
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i>Daftar Order Selesai</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>kode Stikcer</th>
            <th>Nama Stikcer</th>
            <th>Nomor n/a</th>
            <th>Tanggal Order</th>
            <th>Tanggal Kemas</th>
            <th>No. Batch</th>
            <th>Qty Order</th>
            <th>Qty Dikerjakan</th>
            <th>Status</th>

          </tr>
        </thead>
      
        <tbody>
          <?php foreach ($data as $key) {
                $this->db->where('kd_sticker', $key->id_sticker);
                $getSticker = $this->db->get('sticker')->row();
                ?>


          <tr>
            <?php
                if($getSticker) {
                  ?>

                <td><?php echo $getSticker->kd_sticker; ?></td>
                <td><?php echo $getSticker->nm_sticker; ?></td>
                <td><?php echo $getSticker->no_na; ?></td>
                  <?php
                } else {
                  ?>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                  <?php
                }
                ?>
            <td><?php echo $key->tggl_order;?></td>
            <td><?php echo $key->tgl_kemas?></td>
            <td><?php echo $key->no_batch?></td>
            <td><?php echo $key->qty_cetak;?></td>
            <td><?php echo $key->qty_dikerjakan?></td>
            <td><?php if ($key->status==true) {
              echo "Order Selesai";
            }else {
              echo "Belum Selesai";
            }?></td>
            <?php } ?>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
