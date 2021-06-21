<div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Input Sticker Masuk</div>
      <div class="card-body">
        <form method="post" action="<?php echo base_url()?>Admin_Gudang/input_sticker_masuk">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">kode sticker</label>
                <input class="form-control" id="exampleInputName" name="kode_sticker" type="text" aria-describedby="nameHelp" placeholder="kode sticker">
              </div>
              <div class="col-md-12">
                <label for="exampleInputLastName">nama sticker</label>
                <input class="form-control" id="exampleInputLastName" name="nama_sticker" type="text" aria-describedby="nameHelp" placeholder="Nama sticker">
              </div>
            </div>
            <label for="exampleInputEmail1">No n/a</label>
            <input class="form-control" id="exampleInputEmail1" name="nona" type="text" aria-describedby="emailHelp" placeholder="No n/a">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputPassword1">QTY</label>
              <input class="form-control" id="exampleInputEmail1" name="qty" type="number" aria-describedby="emailHelp" placeholder="qty">
              </div>
            </div>
          </div>
        <input class=" btn btn-primary" type="submit" name="tambah" value="tambahkan" class="col-md-12">
        </form>
      </div>
    </div>
  </div>
