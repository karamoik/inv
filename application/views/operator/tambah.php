<div class="card card-register mx-auto mt-5">
  <div class="card-header">input qty dikerjakan</div>
  <div class="card-body">
          <?php foreach($data_tambah as $dtt){ ?>
    <form method="post" action="<?php echo base_url()?>OperatorCetak/proses_tambah_hasil_cetak/?>">

      <div class="form-group">
        <div class="form-row">
          <div class="col-md-12">
            <label for="exampleInputLastName">id sticker</label>
            <input class="form-control" id="result" type="text" name="id_sticker" aria-describedby="nameHelp" placeholder="<?php echo $dtt->id_sticker?>">
          </div>
          <div class="col-md-12">
            <label for="exampleInputLastName">nama sticker</label>
            <input class="form-control" id="result" type="text" name="nama_sticker" aria-describedby="nameHelp" placeholder="<?php echo $dtt->nm_sticker?>">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">jumlah cetak</label>
        <input class="form-control" id="exampleInputEmail1" type="text" name="jml_ctk" aria-describedby="emailHelp" placeholder="<?php echo $dtt->qty_dikerjakan;?>" value ="<?php echo $dtt->qty_dikerjakan;?>">
      </div>
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="exampleInputPassword1">no batch</label>
            <input class="form-control" id="exampleInputPassword1" name="no_batch" type="text" placeholder="<?php echo $dtt->no_batch?>" value="<?php echo $dtt->no_batch?>">
          </div>
          <?php
            $this->db->where('no_order', $dtt->no_order);
            $data_order = $this->db->get('order')->row();
          ?>
          <div class="col-md-6">
            <label for="exampleConfirmPassword">tanggal order</label>
            <input class="form-control" id="exampleConfirmPassword" type="text" name="tgl_order" placeholder="<?php if(!empty($data_order)) {echo $data_order->tggl_order;} ?>">
          </div>
          <div class="col-md-6">
            <label for="exampleConfirmPassword">tanggal kemas</label>
            <input class="form-control" id="exampleConfirmPassword" type="text" name="tgl_kemas" placeholder="<?php echo $dtt->tgl_kemas?>">
          </div>
        </div>
      </div>
    <?php } ?>
      <input class="btn btn-primary btn-block" type="submit" name="tambah" value="tambah">
    </form>
  </div>
</div>
