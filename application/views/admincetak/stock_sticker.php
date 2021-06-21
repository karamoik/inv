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
            <div class="card-header">edit qty</div>
            <div class="card-body">
              <form method="post" action="<?php echo base_url()?>Admin_Gudang/edit_stock_sticker">
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-12">
                      <label for="exampleInputLastName">id sticker</label>
                      <input class="form-control" id="result" type="text" name="id_sticker" aria-describedby="nameHelp" placeholder="nama sticker">
                    </div>
                    <div class="col-md-12">
                      <label for="exampleInputLastName">nama sticker</label>
                      <input class="form-control" id="result" type="text" name="nama_sticker" aria-describedby="nameHelp" placeholder="nama sticker">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">jumlah sticker</label>
                  <input class="form-control" id="exampleInputEmail1" type="text" name="jml_ctk" aria-describedby="emailHelp" placeholder="quantity">
                </div>
                <input class="btn btn-primary btn-block" type="submit" name="tambah" value="edit">
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

  <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i> stock sticker</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>kode sticker</th>
                <th>nama sticker</th>
                <th>nomor N/a</th>
                <th>qty</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>kode sticker</th>
                <th>nama sticker</th>
                <th>nomor N/a</th>
                <th>qty</th>
              </tr>
            </tfoot>
            <tbody>
              <?php foreach ($stock_sticker as $ss){ ?>
              <tr>
                <td><?php echo $ss->kode_sticker; ?></td>
                <td><?php echo $ss->nm_sticker; ?></td>
                <td><?php echo $ss->no_na; ?></td>
                <td><?php echo $ss->qty; ?></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
