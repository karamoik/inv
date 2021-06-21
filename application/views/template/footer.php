<footer class="sticky-footer">
  <div class="container">
    <div class="text-center">
      <small>Copyright © W.G</small>
    </div>
  </div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fa fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logout">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="<?php echo base_url()?>/Auth/logout">Logout</a>
      </div>
    </div>
  </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url()?>assets/vendor/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url()?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->

<script src="<?php echo base_url()?>assets/js/sb-admin-datatables.min.js"></script>
<script src="<?php echo base_url()?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo base_url()?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo base_url()?>/assets/js/sb-admin.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- Custom scripts for this page-->
<!-- Toggle between fixed and static navbar-->
<script>
$('#toggleNavPosition').click(function() {
  $('body').toggleClass('fixed-nav');
  $('nav').toggleClass('fixed-top static-top');
});

$(document).ready(function() {
    $('.js-example-basic-single').select2();
});

</script>
<!-- Toggle between dark and light navbar-->
<script>
$('#toggleNavColor').click(function() {
  $('nav').toggleClass('navbar-dark navbar-light');
  $('nav').toggleClass('bg-dark bg-light');
  $('body').toggleClass('bg-dark bg-light');
});

$(function() {
  $('.js-example-basic-single').select2({
      dropdownParent: $('#modal-detail-order')
  });

  $("#btn-simpan-order").click(function () {
    var id = $("[name='id_sticker']").val()
    var tgl = $("[name='tgl_order']").val()
    var jml = $("[name='jml_ctk']").val()

    $.ajax({
      url: "<?php echo base_url()?>Admin_Cetak/input_jadwal_cetak_proses",
      type: "post",
      data: {id_sticker: id, tgl_order: tgl, jml_ctk: jml},
      success:function (data) {
        $("[name='no_order_detail']").val(data)
        $("#input").modal("hide")
        $("#modal-detail-order").modal("show")
      }
    })
  })

  $("#btn-simpan-detail-order").click(function () {
    $('#modal-detail-order').modal({backdrop: 'static', keyboard: false})

    var id_sticker = $("[name='id_sticker_detail']").val()
    var qty = $("[name='qty_detail']").val()
    var batch = $("[name='batch_detail']").val()
    var tgl = $("[name='tgl_detail']").val()
    var no_order = $("[name='no_order_detail']").val()

    $.ajax({
      url: "<?php echo base_url()?>Admin_Cetak/input_jadwal_cetak_detail",
      type: "post",
      data: {id_sticker: id_sticker, qty: qty, batch: batch, tgl: tgl, no_order: no_order},
      success:function (data) {

        $("[name='id_sticker_detail']").val('')
        $("[name='qty_detail']").val('')
        $("[name='batch_detail']").val('')
        $("[name='tgl_detail']").val('')

        swal({
          title: "Lanjut input detail order?",
          text: "",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (!willDelete) {
            window.location.href = "http://localhost/inv/Admin_Cetak/input_jadwal_cetak";
          }
        });
      }
    })
  })

  $(document).on('click', '.btn-hapus-jadwal', function() {
    var id = $(this).data('id');

    swal({
      title: "Apakah anda yakin ingin menghapusnya?",
      text: "",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
          url: "<?php echo base_url()?>Admin_Cetak/hapus_jadwal/"+id,
          type: "get",
          success:function (data) {
            window.location.href = "http://localhost/inv/Admin_Cetak/input_jadwal_cetak";
          }
        })
      }
    });
  })
})
</script>
</div>
</body>

</html>
