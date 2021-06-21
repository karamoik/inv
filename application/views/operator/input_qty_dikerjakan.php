  <title>Aplikasi Inventory Sticker PT.L'essential</title>
<div class="container">


    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i>Order Sticker</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Kode Stikcer</th>
                <th>Nama Stikcer</th>
                <th>Nomor n/a</th>
                <th>Tanggal Order</th>
                <th>tanggal Kemas</th>
                <th>No. Batch</th>
                <th>Qty Order</th>
                <th>Qty dikerjakan</th>
                <th>Opsi</th>
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
                <td><a href="<?php echo base_url()?>OperatorCetak/tambah_hasil_cetak/<?php echo $key->no_batch ?>"><button type="button" class="btn btn-primary">
                  <svg class="bi bi-pencil-square" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
  </svg>
</button></a>
              </td>
              </tr>
                  <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
