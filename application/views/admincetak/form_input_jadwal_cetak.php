
<div class="container ">
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#input">
Tambah Order Sticker
</button>

<!-- Modal -->
<div class="modal fade " id="input" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="input">Order Sticker</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card card-register mx-auto mt-5">
          <div class="card-header">Order Sticker</div>
          <div class="card-body">
            <!-- <form method="post" action="<?php echo base_url()?>Admin_Cetak/input_jadwal_cetak_proses"> -->
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-12">
                    <label for="exampleInputLastName">NO Order</label>
                    <input class="form-control" id="result" type="text" name="id_sticker" aria-describedby="nameHelp" placeholder="No Order">
                  </div>
                  <div class="col-md-12">
                    <label for="exampleInputLastName">Tanggal Order</label>
                    <input class="form-control datepicker" type="text" name="tgl_order" aria-describedby="nameHelp" placeholder="Tanggal Order">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Staff</label>
                <input class="form-control" id="exampleInputEmail1" type="text" name="jml_ctk" aria-describedby="emailHelp" placeholder="Nama Staff">
              </div>
              
              <!-- <input class="btn btn-primary btn-block" type="submit" name="tambah" value="Tambah"> -->
              <button class="btn btn-primary btn-block" id="btn-simpan-order">Tambah</button>
            <!-- </form> -->
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-detail-order" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="input">Order Sticker</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card card-register mx-auto mt-5">
          <div class="card-header">Detail Order Sticker</div>
          <div class="card-body">
            <!-- <form method="post" action="<?php echo base_url()?>Admin_Cetak/input_jadwal_cetak_proses"> -->
              <input type="hidden" name="no_order_detail">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="list_sticker">Sticker</label>
                  <select class="js-example-basic-single form-control full-width" id="list_sticker" name="id_sticker_detail">
                    <?php
                      foreach ($list_sticker as $key) {
                        ?>
                        <option value="<?= $key->kd_sticker; ?>"><?= $key->nm_sticker; ?></option>
                        <?php
                      }
                    ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-12">
                    <label for="exampleInputLastName">QTY Cetak</label>
                    <input class="form-control" id="result" type="text" name="qty_detail" aria-describedby="nameHelp" placeholder="QTY Cetak">
                  </div>
                  <div class="col-md-12">
                    <label for="exampleInputLastName">NO BATCH</label>
                    <input class="form-control" id="result" type="text" name="batch_detail" aria-describedby="nameHelp" placeholder="NO Batch">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Kemas</label>
                <input class="form-control datepicker"   type="text" name="tgl_detail" aria-describedby="emailHelp" placeholder="Tanggal Kemas">
              </div>
              
              <!-- <input class="btn btn-primary btn-block" type="submit" name="tambah" value="Tambah"> -->
              <button class="btn btn-primary btn-block" id="btn-simpan-detail-order">Tambah</button>
            <!-- </form> -->
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    <!-- Example DataTables Card-->
    <div class="card mb-3 mt-5">
      <div class="card-header ">
        <i class="fa fa-table"></i>Order Sticker</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No Order</th>
                <th>Kode Stikcer</th>
                <th>Nama Stikcer</th>
                <th>Nomor n/a</th>
                <th>Tanggal Order</th>
                <th>Tanggal Kemas</th>
                <th>No. Batch</th>
                <th>Qty Order</th>
                <th>Nama Staff</th>
                <th>Action</th>
                
              </tr>
            </thead>
           <tbody>
              <?php foreach ($data as $dt){
                $this->db->where('kd_sticker', $dt->id_sticker);
                $getSticker = $this->db->get('sticker')->row();
                ?>


              <tr>
                <td><?php echo $dt->no_order; ?></td>
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
                <td><?php echo $dt->tggl_order; ?></td>
                <td><?php echo $dt->tgl_kemas; ?></td>
                <td><?php echo $dt->no_batch; ?></td>
                <td><?php echo $dt->qty_cetak; ?></td>
                <td><?php echo $dt->nm_staf; ?></td>
                <td><button class="btn btn-danger btn-block btn-hapus-jadwal" data-id="<?php echo $dt->no_batch; ?>"><i class="fa fa-trash"></i> Hapus</button></td>
              </tr>
            <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                  <th>No Order</th>
                  <th>Kode Stikcer</th>
                  <th>Nama Stikcer</th>
                  <th>Nomor n/a</th>
                  <th>Tanggal Order</th>
                  <th>Tanggal Kemas</th>
                  <th>No. Batch</th>
                  <th>Qty Order</th>
                  <th>Nama Staff</th>
                  <th>Action</th>
                
                </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
