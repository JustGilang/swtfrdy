<?php 
$conn = mysqli_connect("localhost", "root", "", "swtfrdy");
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Site</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <style type="text/css">
    .form-style-1 {
        margin:5px auto;
        width: 90%;
        padding: 0px 1px 10px 20px;
        font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    }
    .form-style-1 li {
        padding: 0;
        display: block;
        list-style: none;
        margin: 10px 0 0 0;
    }
    .form-style-1 label{
        margin:0 0 3px 0;
        padding:0px;
        display:block;
        font-weight: bold;
    }
    .form-style-1 input[type=text], 
    .form-style-1 input[type=date],
    .form-style-1 input[type=datetime],
    .form-style-1 input[type=number],
    .form-style-1 input[type=search],
    .form-style-1 input[type=time],
    .form-style-1 input[type=url],
    .form-style-1 input[type=email],
    textarea, 
    select{
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        border:1px solid #BEBEBE;
        padding: 7px;
        margin:0px;
        -webkit-transition: all 0.30s ease-in-out;
        -moz-transition: all 0.30s ease-in-out;
        -ms-transition: all 0.30s ease-in-out;
        -o-transition: all 0.30s ease-in-out;
        outline: none;	
    }
    .form-style-1 input[type=text]:focus, 
    .form-style-1 input[type=date]:focus,
    .form-style-1 input[type=datetime]:focus,
    .form-style-1 input[type=number]:focus,
    .form-style-1 input[type=search]:focus,
    .form-style-1 input[type=time]:focus,
    .form-style-1 input[type=url]:focus,
    .form-style-1 input[type=email]:focus,
    .form-style-1 textarea:focus, 
    .form-style-1 select:focus{
        -moz-box-shadow: 0 0 8px #88D5E9;
        -webkit-box-shadow: 0 0 8px #88D5E9;
        box-shadow: 0 0 8px #88D5E9;
        border: 1px solid #88D5E9;
    }
    .form-style-1 .field-divided{
        width: 49%;
    }

    .form-style-1 .field-long{
        width: 100%;
    }
    .form-style-1 .field-select{
        width: 100%;
    }
    .form-style-1 .field-textarea{
        height: 100px;
    }
    .form-style-1 input[type=submit], .form-style-1 input[type=button]{
        background: #4B99AD;
        padding: 8px 15px 8px 15px;
        border: none;
        color: #fff;
    }
    .form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
        background: #4691A4;
        box-shadow:none;
        -moz-box-shadow:none;
        -webkit-box-shadow:none;
    }
    .form-style-1 .required{
        color:red;
    }
    </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Site</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Transaksi
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="_transaksi.php" >
          <i class="fas fa-fw fa-cog"></i>
          <span>Lihat Transaksi</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="_custom.php" >
          <i class="fas fa-fw fa-cog"></i>
          <span>Lihat Order Costumize</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Produk
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="_barang.php">
          <i class="fas fa-fw fa-folder"></i>
          <span>Barang</span>
        </a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="_brand.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Brand</span></a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="_desain.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Desain</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Heading -->
      <div class="sidebar-heading">
        Member
      </div>

      <!-- Nav Item -Member -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="_member.php">
          <i class="fas fa-fw fa-folder"></i>
          <span>Member</span>
        </a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
          <br><br>
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img class="img-profile rounded-circle" src="https://ya-webdesign.com/transparent250_/profile-avatar-png-4.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <div class="row">
            <form action="proses/add_func.php" method="POST" class="form-style-1">
                <ul>
                    <li>
                        <label>Kategori</label>
                        <select name="kategori" class="field-select">
                            <option value="-">-- Pilih Kategori</option>
                            <option value="Panjang Pria">Panjang Pria</option>
                            <option value="Panjang Wanita">Panjang Wanita</option>
                            <option value="Panjang Unisex">Panjang Unisex</option>
                            <option value="Pendek Pria">Pendek Pria</option>
                            <option value="Pendek Wanita">Pendek Wanita</option>
                            <option value="Pendek unisex">Pendek Unisex</option>
                        </select>
                    </li>
                    <li>
                        <label>Size</label>
                        <select name="size" class="field-select">
                            <option value="-">-- Pilih Size</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                    </li>
                    <li>
                        <label>Warna</label> 
                        <select name="warna" class="field-select">
                            <option value="-">-- Pilih Warna</option>
                            <option value="Putih">Putih</option>
                            <option value="Hijau">Hijau</option>
                            <option value="Kuning">Kuning</option>
                            <option value="Biru Donker">Biru Donker</option>
                            <option value="Merah">Merah</option>
                            <option value="Hitam">Hitam</option></option>
                        </select>
                    </li>
                    <li>
                        <label>Bahan</label>
                        <select name="bahan" class="field-select">
                            <option value="-">-- Pilih Bahan</option>
                            <option value="Brokad">Brokad (Brocade)</option>
                            <option value="Spandex">Spandex</option>
                            <option value="Polyster">Polyster</option>
                            <option value="Cotton Combed 30s">Cotton Combed 30s</option>
                            <option value="Cotton Combed 20s">Cotton Combed 20s</option>
                        </select>
                    </li>
                    <li>
                        <label>Stock</label><input type="text" name="stock" class="field-long">
                    </li>
                    <li>
                        <label>Harga Satuan :</label><input type="text" name="harga" class="field-long">
                    </li>
                    <li>
                        <input type="submit" name="Barang" value="Submit" />
                    </li>
                </ul>
            </form>
        </div>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kategori</th>
                            <th>size</th>
                            <th>warna</th>
                            <th>bahan</th>
                            <th>Stock</th>
                            <th>Harga</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Kategori</th>
                            <th>size</th>
                            <th>warna</th>
                            <th>bahan</th>
                            <th>Stock</th>
                            <th>Harga</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php
                    $sql = " SELECT * FROM baju ORDER BY id_baju DESC";
                    $query = mysqli_query($conn, $sql);
                    $no=1;

                    while($data = mysqli_fetch_array($query)){
                            $id = $data['id_baju'];
                            $kategori = $data['kategori'];
                            $size = $data['size'];
                            $warna = $data['warna'];
                            $bahan = $data['bahan'];
                            $stock = $data['stock'];
                            $harga = $data['harga']; 
                    ?>
                        <tr>
                            <td><?php echo $id;?></td>
                            <td><?php echo $kategori;?></td>
                            <td><?php echo $size;?></td>
                            <td><?php echo $warna;?></td>
                            <td><?php echo $bahan;?></td>
                            <td><?php echo $stock;?></td>
                            <td><?php echo $harga;?></td>
                            <td>
                                <a href='_barang_edit.php?id=<?= $id?>'>Edit</a> |
								                <a href='proses/delete_func.php?act=barang&id=<?= $id?>'>Hapus</a>
                            </td>
                        </tr>
                    <?php
                        $no++;
                        }
                    ?>
                    </tbody>
                    </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Sweetfriday.Co 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
