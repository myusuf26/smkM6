<?php
include('./../backend/koneksi.php');

?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin| SMK M 6</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="./../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="./../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <a href="../logout.php" class="nav-link">
          <i class="nav-icon fas fa-sign-out-alt"> LOGOUT</i>
        </a>
      </li>
      <!-- Notifications Dropdown Menu -->
 
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="./../admin.php" class="brand-link">
      <img src="./../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SMK M 6 KRA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="./../admin.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="tentang.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>Tentag Sekolahan</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="galeri.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Galeri</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="visi.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Visi dan Misi</p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Kejuruan
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="tkj.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TKJ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tkr.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TKR</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tav.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TAV</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                 Akun
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="akunadmin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="akunpetugas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Petugas</p>
                </a>
              </li>
            </ul>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Akun Petugas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Akun Petugas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            
            <!-- /.card-header -->
       
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
            <button type="button"  class="btn btn-success" data-toggle="modal" data-target="#myModal">Tambah Akun</button>
            <br>
            <br>
              <table id="example1" class="table table-bordered table-striped">  
              <thead>
                <tr>
                  <th>NO</th>
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Level</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $no =1;
                  $query = mysqli_query($koneksi,"SELECT * from user where user.level='petugas' ORDER BY id_user ASC");
                  foreach($query as $tampil){          
                  ?>
                  <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $tampil['nama'];?></td>
                    <td><?php echo $tampil['username'];?></td>
                    <td><?php echo $tampil['password'];?></td>
                    <td><?php echo $tampil['level'];?></td>
                    <td align="center">
                    <button type="button" name="button" class="btn btn-info permissions" onclick="btneditc('<?php echo $tampil['id_user']; ?>')" data-toggle="modal" data-target="#edit" >Edit</button>
                <a class="btn btn-danger" href="./../backend/hapuspetugas.php?id_user=<?php echo $tampil['id_user']; ?>">Hapus</a>
              </td>
                  </tr>
                  <?php
                  } 
                  ?>
                </tbody>

              </table>
            </div>  
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <!-- modal tambah -->
 <div class="container">
    <br/>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
          <!-- heading modal -->
          <div class="modal-header">
            
          <label><h2>Lengkapi Data Akun</h2></label>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <!-- <h4 class="modal-title">Bagian heading modal</h4> -->
          </div>
          <!-- body modal -->
          <div class="modal-body">
          <form action="./../backend/saveakun.php"  id="myForm" method="POST" >
          
          <div class="form-group">
            <label>Nama Admin</label>
            <input type="text" placeholder="nama admin" name="nama"  class="form-control" id="" required>
          </div>
          
          <div class="form-group">
            <label>Username</label>
            <input type="text" placeholder="username" name="username" class="form-control" id="" required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" placeholder="password" name="password" class="form-control" id="" required>
          </div>
          <div class="form-group" >
            <label>Pilih Hak Akses</label>
            <select class="form-control" name="level">
              <option value="">---pilih Hak Akses---</option>
              <option value="admin">Admin</option>
              <option value="petugas">Petugas</option>
            </select>
          </div>
          <div class="modal-footer">
          <button type="Reset" class="btn btn-danger" >Reset</button>
          <input type="submit" class="btn btn-success" name="myModal" value="Simpan"></input>
        </div>
        
          </div>
          </form>
        </div>
      </div>
    </div>
</div>
<!-- akhir -->


<!-- edit akun -->
<div class="container">
    <br/>
    <!-- Modal -->
    <div id="edit" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
          <!-- heading modal -->
          <div class="modal-header">
          <label><h2>Edit Data Akun</h2></label>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <!-- <h4 class="modal-title">Bagian heading modal</h4> -->
          </div>
          <!-- body modal -->
          <div class="modal-body">
          <form action="./../backend/editakunpetugas.php"  id="myForm" method="POST" >

          <div class="form-group">
            <label>Nama Admin</label>
            <input type="text" placeholder="nama admin" name="nama" class="form-control" id="nama"  require>
          </div>
         
          <div class="form-group">
            <label>Username</label>
            <input type="text" placeholder="username" name="username" class="form-control" id="username" require >
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" placeholder="password" name="password"  class="form-control" id="password" require >
          </div>

          <div class="form-group">
            <label for="level">Hak Akses</label>
            <select name="level" class="form-control" id="level" name="level" required>
              <option value="admin" id="admin">admin</option>
              <option value="petugas" id="petugas">petugas</option>
            </select>
          </div>
          <div class="modal-footer">
          <button type="Reset" class="btn btn-danger" >Reset</button>
          <input type="submit" class="btn btn-success" name="edit" value="Simpan"></input>

        </div>
          </div>
          </form>
        </div>
      </div>
    </div>
</div>
<!-- end akun -->
<footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="#">SMK Muhammadiyah 6 Karanganyar</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="./../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="./../plugins/datatables/jquery.dataTables.js"></script>
<script src="./../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="./../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./../dist/js/demo.js"></script>
<!-- page script -->

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

<script>
function btneditc(id) {
  $.ajax({
    url: "ajaxpetugas.php?id=" + id,
    success: function (data) {
      var $response = $(data);
      $('#id_user').val($response.filter('#id_user').text());
      $('#nama').val($response.filter('#nama').text());
      $('#username').val($response.filter('#username').text());
      $('#password').val($response.filter('#password').text());
      $('#level').val($response.filter('#level').text());
      $('#edit').modal('show');
    }
  });
}
function additem() {
  $('#id_user').val('');
  $('#nama').val('');
  $('#username').val('');
  $('#password').val('');
  $('#level').val('');
  $('#myModal').modal('show');
}

</script>

</body>

