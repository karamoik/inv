
  <div class="container">
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Daftar Customer</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead align="center">
                <tr>
                  <th>Kode Customer</th>
                  <th>Nama Customer</th>
                </tr>
              </thead>
              <tfoot align="center">
                <tr>
                  <th>Kode Customer</th>
                  <th>Nama Customer</th>
                </tr>
              </tfoot>
              <tbody align="center">
                  <?php foreach ($data_cus as $data){?>
                <tr >
                  <td><?php echo $data->kode_customer;?></td>
                  <td><?php echo $data->nama_customer;?></td>
                </tr>
              <?php }?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

    <!-- Page level plugin JavaScript-->
