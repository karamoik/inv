<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <a class="navbar-brand" href="<?php echo base_url()?>/assets/index.html"><?php echo "Essential Inventory System"?></a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
<?php if ($this->session->userdata('jabatan')==102 and $this->session->userdata('divisi')==1001){?>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="<?php echo base_url()?>Admin_Cetak/master_sticker">
          <i class="fa fa-fw fa-dashboard"></i>
          <span class="nav-link-text">Master Sticker</span>

        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="<?php echo base_url()?>Admin_Cetak/lihat_master_customer">
          <i class="fa fa-fw fa-table"></i>
          <span class="nav-link-text">Master Customer</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="<?php echo base_url()?>Admin_Cetak/input_jadwal_cetak">
          <i class="fa fa-fw fa-dashboard"></i>
          <span class="nav-link-text">Order Sticker</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="<?php echo base_url()?>Admin_Cetak/order_selesai">
          <i class="fa fa-fw fa-table"></i>
          <span class="nav-link-text">Order Selesai</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="<?php echo base_url()?>Admin_Cetak/stock_gudang">
          <i class="fa fa-fw fa-table"></i>
          <span class="nav-link-text">Stock Gudang</span>
        </a>
      </li>
    <?php }else if($this->session->userdata('jabatan')==102 and $this->session->userdata('divisi')==1002){?>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="<?php echo base_url()?>Admin_gudang/stock_gudang">
          <i class="fa fa-fw fa-table"></i>
          <span class="nav-link-text">Stock Gudang</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="<?php echo base_url()?>Admin_Gudang/sticker_masuk">
          <i class="fa fa-fw fa-table"></i>
          <span class="nav-link-text">Sticker Masuk</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="<?php echo base_url()?>Admin_gudang/sticker_keluar">
          <i class="fa fa-fw fa-table"></i>
          <span class="nav-link-text">Sticker Keluar</span>
        </a>
      </li>
    <?php }else if($this->session->userdata('jabatan')==101 and $this->session->userdata('divisi')==1001){?>

      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="<?php echo base_url()?>OperatorCetak/input_qty_dikerjakan">
          <i class="fa fa-fw fa-dashboard"></i>
          <span class="nav-link-text">Input Hasil Cetak</span>
          
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="<?php echo base_url()?>OperatorCetak/lihat_order_selesai">
          <i class="fa fa-fw fa-table"></i>
          <span class="nav-link-text">Daftar Order Selesai</span>
        </a>
      </li>
    <?php }?>
    </ul>
    <ul class="navbar-nav sidenav-toggler">
      <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
          <i class="fa fa-fw fa-angle-left"></i>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto bg-inverse">

    </ul>
    <ul>
      <!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?php echo $this->session->userdata('nama')?>
  </button>
  <div class="dropdown-menu">
    <li class="nav-item">
      <a class="nav-link" data-toggle="modal" data-target="#logout">
        <i class="fa fa-fw fa-sign-out"></i>Logout</a>
    </li>
  </div>
</div>
    </ul>
  </div>
</nav>
