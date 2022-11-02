<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
  <title>Sistem Perpustakaan</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- BOOTSTRAP CORE STYLE  -->
  <link href="<?php echo base_url(); ?>assets2/css/bootstrap.css" rel="stylesheet" />
  <!-- MATERIALIZE -->
  <link href="<?php echo base_url(); ?>assets2/css/materialize.min.css" rel="stylesheet" />
  <!-- FONT AWESOME ICONS  -->
  <link href="<?php echo base_url(); ?>assets2/css/font-awesome.css" rel="stylesheet" />
  <!-- CUSTOM STYLE  -->
  <link href="<?php echo base_url(); ?>assets2/css/style.css" rel="stylesheet" />
  <!-- SLIDER -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

  <style>
    .bgg {
      background-image: url('<?php echo base_url(); ?>assets2/img/1.jpg');
      background-size: cover;
    }
  </style>
  <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <!-- navbar -->
  <div class="navbar-fixed">
    <nav class="navbar navbar-expand-lg" style="background-color: #063a06; border-radius: 0px;">
      <div class="container-fluid">
        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">MENU</i></a>
        <div class="nav-wrapper">
          <ul class="left hide-on-med-and-down">
            <li><a href="<?php echo base_url(); ?>Buku">Portal Akademik</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bahasa Indonesia</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#" style="color:black">English</a>
              </div>
            </li>
          </ul>

          <ul class="right hide-on-med-and-down">
            <li><a class="btn" href="<?php echo base_url(); ?>/web/log" style="background-color: #e6e6e6; border-radius: 10px; color:black;">MASUK</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <div class="jumbotron" style="background-color: #046804; padding-bottom: 1%; margin-bottom: 0px">
    <a href="<?php echo base_url();?>Buku" class="brand-logo"><img src="<?php echo base_url(); ?>assets2/img/logo uin.png" style="width: 72px; height: 84px; left: 23px; top: 58px; background-color: #046804; margin-top: -20px; margin-left: 20px; border: none" class="img-thumbnail" alt="LOGO UIN"></a>
    <h3 style="color:white; font-weight: bolder !important; position: relative; margin-top: -90px; margin-left: 97px;">PERPUSTAKAAN PASCASARJANA<br>UIN SUNAN GUNUNG DJATI BANDUNG</h1>
      <nav class="pull-right" style="width: 600px; background-color: #063a06; height: 51px;">
        <div style="background-color: #063a06 ; width: fit-content; margin-top: 0%;">
          <ul class="right hide-on-med-and-down">
            <li><a href="<?php echo base_url(); ?>Buku" style="height: 50px;">BERANDA</a></li>
            <li class="nav-item dropdown" style="width: fit-content">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 50px;">PROFIL</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="width: fit-content">
                <a href="<?php echo base_url(); ?>Buku/profile" style="color:black">PROFIL</a>
                <a href="<?php echo base_url(); ?>Buku/prosta" style="color:black">STAFF</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 50px;">LAYANAN DAN FASILITAS</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#" style="color:black">English</a>
              </div>
            </li>
            <li><a href="<?php echo base_url(); ?>Buku/list_buku" style="height: 50px;">PENCARIAN</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 50px;">BANTUAN</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#" style="color:black">English</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
  </div>

  <!-- navbar-end -->

  <!-- SideNav -->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="<?php echo base_url(); ?>Buku/list_buku">Daftar Buku</a></li>
    <li><a href="<?php echo base_url(); ?>Buku/profile">Profil</a></li>
    <li><a class="btn orange" href="portofolio.php">MASUK</a></li>
  </ul>
  <!-- SideNav-end -->
  <!-- Slider -->

  <!-- Slider end -->

  <!-- LOGO HEADER END-->

  <!-- MENU SECTION END-->
  <div class="content-wrapper">
    <div class="container">
      <?php echo $content; ?>
    </div>
    <div class="row">
      <div class="col-md-12">
      </div>
    </div>
  </div>
  <footer class="card" style="background-color: #046804 ; margin-top: 100px; margin-bottom: 0px">
    <div class="card-body" style="color: white;">
      <a href="<?php echo base_url();?>Buku" class="brand-logo"><img src="<?php echo base_url(); ?>assets2/img/logo uin.png" style="width: 72px; height: 84px; left: 23px; top: 58px; background-color: #046804; margin-top: 15px; margin-left: 20px; border: none;" class="img-thumbnail" alt="LOGO UIN">
      <h3 class="fw-bolder fs-3" style="color:white; position: relative; margin-top: -87px; margin-left: 97px;">PASCASARJANA<br>UIN SUNAN GUNUNG DJATI BANDUNG</h3>
      <div class="info fw-bolder" style="margin-top: 20px; margin-left: 20px;">
        <p>Pascasarjana UIN Bandung Kampus II UIN<br>Bandung Jalan Cimencrang, Panyileukan,<br>Cimencreang, Gedebage, Kota Bandung, Jawa<br>Barat 40292<br></p>
        <h6>Telepon: +6281-1111-12982<br></h6>
        <h6>Email: infopasca@uinsgd.ac.id</h6>
      </div>
      <div class="layanan fw-bold" style="position: relative; margin-top: -167px; margin-left: 410px;">
        <p class="fw-normal">LAYANAN<br></p>
        <p>Jam Pelayanan<br></p>
        <p>Keanggotaan<br></p>
        <p>Layanan Sirkulasi<br></p>
      </div>
      <div class="e-resources fw-bold" style="position: relative; margin-top:-162px; margin-left: 610px;">
        <p class="fw-normal">E-Resources<br></p>
        <p>Katalog Jurnal<br>Online Terpadu<br></p>
        <p>Buku Elektronik<br></p>
        <p>Trial Akses<br></p>
      </div>
      <div class="quick-acces fw-bold" style="position: relative; margin-top: -183px; margin-left: 810px;">
        <p class="fw-normal">QUICK ACCES<br></p>
        <p>Akses E-Journal<br></p>
        <p>Skripsi, Tesis, dan Disertasi<br></p>
        <p>Jurnal Online PASCASARJANA UIN<br></p>
      </div>
    </div>
    <br>
    <div class="card-footer text-white fw-bolder text-center" style="background-color: #063a06;">
      &#169; 2022 PERPUSTAKAAN PASCASARJANA UIN SUNAN GUNUNG DJATI BANDUNG
    </div>
  </footer>

  <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets2/js/materialize.min.js"></script>
  <!-- <?php echo base_url(); ?>assets/bootstrap 3.3.6 -->
  <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
  <!--data tables-->
  <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
  <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);



    const parallaxkeren = document.querySelectorAll('.parallax');
    M.Parallax.init(parallaxkeren);

    const materialboxjalan = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(materialboxjalan);

    const scrolloto = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scrolloto, {
      scrollOffset: 50
    });
  </script>
  <script>
    function format_buku(d) {
      // `d` is the original data object for the row
      return '<div class="box box-info">' +
        '<div class="box-header with-border">' +
        '<h3 class="box-title">Detail Buku</h3>' +
        '</div>' +
        '<div class="box-body no-padding">' +
        '<table class="table table-striped">' +
        '<tr>' +
        '<td>ID Buku</td>' +
        '<td>' + d[2] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>ISBN</td>' +
        '<td>' + d[3] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Judul Buku</td>' +
        '<td>' + d[4] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Kategori</td>' +
        '<td>' + d[5] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Penerbit</td>' +
        '<td>' + d[6] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Pengarang</td>' +
        '<td>' + d[7] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>No Rak</td>' +
        '<td>' + d[9] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Tahun Terbit</td>' +
        '<td>' + d[10] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Total Stok</td>' +
        '<td>' + d[8] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Keterangan</td>' +
        '<td>' + d[12] + '</td>' +
        '</table>' +
        '</div>' +
        '</div>' +
        '</div>';
    }

    $(document).ready(function() {
      $('#table-buku').DataTable({
        "columnDefs": [{
            "targets": [2],
            "visible": false,
          },
          {
            "targets": [10],
            "visible": false
          },
          {
            "targets": [11],
            "visible": false
          },
          {
            "targets": [12],
            "visible": false
          },

        ]
      });

      var table = $('#table-buku').DataTable();
      $('#table-buku tbody').on('click', 'td.details-control', function() {
        var tr = $(this).closest('tr');
        var row = table.row(tr);

        if (row.child.isShown()) {
          // This row is already open - close it
          row.child.hide();
          tr.removeClass('shown');
        } else {
          // Open this row
          row.child(format_buku(row.data())).show();
          tr.addClass('shown');
        }
      });
    });


    $(document).ready(function() {

      $('#table-penerbit').DataTable();

    });


    $('#confirm-delete').on('show.bs.modal', function(e) {
      $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

      $('.debug-url').html('URL Hapus: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
    });

    $('.date-own').datepicker({
      minViewMode: 2,
      format: 'yyyy'
    });


    $(document).ready(function() {
      $(".js-example-basic-single").select2();
    });

    function format_petugas(d) {
      // `d` is the original data object for the row
      return '<div class="box box-info">' +
        '<div class="box-header with-border">' +
        '<h3 class="box-title">Detail Petugas</h3>' +
        '</div>' +
        '<div class="box-body no-padding">' +
        '<table class="table table-striped">' +
        '<tr>' +
        '<td>Jabatan</td>' +
        '<td>' + d[5] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Nama</td>' +
        '<td>' + d[2] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>NIP</td>' +
        '<td>' + d[3] + '</td>' +
        '</tr>' +


        '<tr>' +
        '<td>No HP</td>' +
        '<td>' + d[4] + '</td>' +
        '</tr>' +

        '<tr>' +
        '<td>Foto</td>' +
        '<td>' + d[6] + '</td>' +
        '</table>' +
        '</div>' +
        '</div>' +
        '</div>';
    }

    $(document).ready(function() {
      $('#table-petugas1').DataTable({
        "columnDefs": []
      });

      var table = $('#table-petugas1').DataTable();
      $('#table-petugas1 tbody').on('click', 'td.details-control', function() {
        var tr = $(this).closest('tr');
        var row = table.row(tr);

        if (row.child.isShown()) {
          // This row is already open - close it
          row.child.hide();
          tr.removeClass('shown');
        } else {
          // Open this row
          row.child(format_petugas(row.data())).show();
          tr.addClass('shown');
        }
      });
    });
  </script>



  <!-- sort table and many more -->
  <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
  <!-- SlimScroll -->
  <!-- script src="<?php echo base_url(); ?>assets/plugins/plugins/slimScroll/jquery.slimscroll.min.js"></script> -->
  <!-- FastClick -->
  <!-- <script src="<?php echo base_url(); ?>assets/plugins/plugins/fastclick/fastclick.js"></script> -->
</body>

</html>