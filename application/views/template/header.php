<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <title><?php echo $title;?></title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url()?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()?>/assets/css/sb-admin.css" rel="stylesheet">

  <script src="<?php echo base_url()?>/assets/jquery-ui/jquery-3.5.1.min.js"></script>
  <link href="<?php echo base_url()?>/assets/jquery-ui/jquery-ui.css" rel="stylesheet">
  <script src="<?php echo base_url()?>/assets/jquery-ui/jquery-ui.js"></script>
  <script type="text/javascript">
  	$(function(){
  	  $(".datepicker").datepicker({dateFormat:'yy-mm-dd'});
  	});
    $(function(){
  	  $("#datepicker2").datepicker({dateFormat:'yy-mm-dd'});
  	});
  </script>

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <div class="content-wrapper">
