<!DOCTYPE html>
<html lang="en">

<!-- php code start -->
<?php 

    require_once("config.php"); 
    
    // start update data tabel 
    $sql3 = "SELECT id_siswa,paket_pilihan FROM siswa";
    // end update data tabel 

    // start get tabel instruktur
    $sql = "SELECT * FROM siswa";
    $query = mysqli_query($db, $sql);
    // end get tabel instruktur

    // start enrollment saat insert data
    $sql_enrollment = "SELECT * FROM paket";
    $query_enrollment = mysqli_query($db, $sql_enrollment);
    // end enrollment saat insert data
?>
<!-- php code end -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


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
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Heading -->
            <div class="sidebar-heading">
                Siswa
            </div>

            <!-- Nav Item - Dashboard -->
            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            

            <!-- Nav Item - admin -->
            
            <li class="nav-item">
                <a class="nav-link" href="index-siswa.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Siswa</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
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

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                        </div>
                    </form>

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

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Siswa</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#create"><i class="fas fa-download fa-sm text-white-50"></i> New Siswa </a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Table Instruktur -->
                        <div class="col-xl-12 ">
                            <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="2">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Id</th>
                                                        <th>Nama</th>
                                                        <th>Jenis Paket</th>
                                                        <th>Pelajaran</th>
                                                        <th>Hari</th>
                                                        <th>Jam</th>
                                                        <th>Edit</th>
                                                        <th>Hapus</th>
                                                        <th>Upload</th>
                                                    </tr>
                                                    <tfoot>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Id</th>
                                                        <th>Nama</th>
                                                        <th>Jenis Paket</th>
                                                        <th>Pelajaran</th>
                                                        <th>Hari</th>
                                                        <th>Jam</th>
                                                        <th>Edit</th>
                                                        <th>Hapus</th>
                                                        <th>Upload</th>
                                                    </tr>
                                                </tfoot>
                                                </thead>
                                                <tbody>
                                                <?php $no=1; 
                                                while ($data = mysqli_fetch_assoc($query) ) {?> 
                                                    <tr>
                                                        <td><?php echo $no++ ?></td>
                                                        <td><?php echo $data['nis'] ?></td>
                                                        <td><?php echo $data['nama_siswa'] ?></td>
                                                        <td><?php echo $data['pilh_paket'] ?></td>
                                                        <td><?php echo $data['mata_kuliah'] ?></td>
                                                        <td><?php echo $data['hari'] ?></td>
                                                        <td><?php echo $data['jam_belajar'] ?></td>
                                                        <td>
                                                            <a href="#" class="btn btn-success btn-circle" data-toggle="modal" data-target="#edit<?php echo $data['id_siswa'] ?>">
                                                                <i class="fas fa-check"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="delete-siswa.php?id=<?php echo $data['id_siswa'];?>" class="btn btn-danger btn-circle" onClick="return confirm('Apakah Anda Yakin?')" >
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#upload"><i class="fas fa-download fa-sm text-white-50"></i> Upload </a>
                                                        </div>
                                                        <td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /. Content row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2019</span>
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

    <!-- start modal -->
    <div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    UPLOAD BERKAS
                </div>
                <div class="modal-body">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    Select image to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                </form>
                </div>
            </div>
        </div>
    </div> 
    <!-- Start Modal Tambah Instruktur -->
    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    TAMBAH DATA SISWA
                </div>
                <div class="modal-body">
                    <!-- isi form ini -->
                    <form method="POST" action="create-siswa.php">
                        <?php 
                            $sql_nis = "SELECT MAX(nis) FROM siswa";
                            $query_nis = mysqli_query($db, $sql_nis);
                            $data_nis = mysqli_fetch_row($query_nis);
                            if ($data_nis[0] < 1000) $nis = 1000;
                            else $nis = $data_nis[0]+1;
                        ?>

                        <div class="form-group">
                            <label for="formGroupExampleInput">ID Siswa : </label>
                            <!-- <label for="formGroupExampleInput"><?php //echo $no_instruktur; ?></label>  -->
                            <input type="text" class="form-control" id="formGroupExampleInput" name="nis" value="<?php echo $nis; ?>" required readonly >   
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Nama Siswa</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama siswa" name="nama_siswa" required >
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Tempat Lahir</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Tempat Lahir" name="tempat_lahir_siswa" required >
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Tanggal Lahir</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="YYYY-MM-DD" name="tanggal_lahir_siswa" required >
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Alamat</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Alamat" name="alamat_siswa" required >
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">No Telfon</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="No Telfon" name="telfon_siswa" required >
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Agama</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Agama" name="agama_siswa" required >
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput2">Pilih Enrollment</label>
                            <select class="form-control" id="formGroupExampleInput2" name="paket" required>
                                <?php while ($data_enrollment = mysqli_fetch_array($query_enrollment)) {?>
                                    <option value="<?php echo $data_enrollment['id_paket']; ?>" ><?php echo $data_enrollment['pilh_paket'].' - '.$data_enrollment['jam_belajar'].' - '.$data_enrollment['hari_belajar'];  ?></option>
                                <?php } ?>
                            </select>            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <input  type="submit" class="btn btn-primary" name="simpan1" id="hapus" value="Submit" placeholder="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Tambah Instruktur -->

    <!-- Start Modal Edit Mahasiswa -->
    <?php 
        $sql1 = "SELECT * FROM siswa";
        $query1 = mysqli_query($db, $sql1);
        while ($data = mysqli_fetch_array($query1) ) { 
        ?>
            <div class="modal fade" id="edit<?php echo $data['id_siswa']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            EDIT DATA SISWA
                        </div>

                        <div class="modal-body">
                        <!-- isi form ini -->
                            <form method="post" action="edit-siswa.php?id=<?php echo $data['id_siswa'];?>">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Nama Siswa</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama siswa" name="nama_siswa"  value="<?php echo $data['nama_siswa'] ?>" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                    <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php  } ?>
        <!-- End Modal Edit Mahasiswa -->

    <!-- end modal -->

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