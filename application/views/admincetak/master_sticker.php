<div class="container">

  <!-- Modal -->
  <div class="modal fade" id="input" tabindex="-1" role="dialog" aria-labelledby="input" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="input"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card card-register mx-auto mt-5">
            <div class="card-header">Create Master Sticker</div>
            <div class="card-body">
              <form method="post" action="<?php echo base_url()?>Admin_Cetak/master_sticker_proses">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-12">
                      <label for="exampleInputLastName">Kode Sticker</label>
                      <input class="form-control" id="result" type="text" name="id_sticker" aria-describedby="nameHelp" placeholder="Kode Sticker">
                    </div>
                    <div class="col-md-12">
                      <label for="exampleInputLastName">Nama Sticker</label>
                      <input class="form-control" id="result" type="text" name="nama_sticker" aria-describedby="nameHelp" placeholder="Nama Sticker">
                    </div>
                    <div class="col-md-12">
                      <label for="exampleInputLastName">Nomor n/a</label>
                      <input class="form-control" id="result" type="text" name="no_na" aria-describedby="nameHelp" placeholder="No. n/a">
                    </div>
                  </div>
                </div>

                <input class="btn btn-primary btn-block" type="submit" name="tambah" value="Create">
              </form>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#input">
    Create Master Sticker
  </button>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> Master Sticker</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Kode Stikcer</th>
                <th>Nama Stikcer</th>
                <th>Nomor n/a</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data as $dt){?>
              <tr>
                <td><?php echo $dt->kd_sticker;?></td>
                <td><?php echo $dt->nm_sticker;?></td>
                <td><?php echo $dt->no_na;?></td>
              </tr>
              <?php }?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
