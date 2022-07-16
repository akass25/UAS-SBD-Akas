<?php
require 'function.php';
require 'cek.php';

//get data
//ambil data dokter
$get1 = mysqli_query($conn,"SELECT * from dokter");
$hitung1= mysqli_num_rows($get1); //Hitung jumlah kolom

//ambil data Obat
$get2 = mysqli_query($conn,"SELECT * from obat");
$hitung2= mysqli_num_rows($get2); //Hitung jumlah kolom

//ambil data Pasien
$get3 = mysqli_query($conn,"SELECT * from pasien");
$hitung3= mysqli_num_rows($get3); //Hitung jumlah kolom


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dasboard</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark-green ps-4">
        <button class="btn btn-link btn-sm order-0 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars text-light"></i></button>
        <a class="navbar-brand ms-5" href="index.php">adminklinik</a>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="nav-member selected">
                            <a class="nav-link" href="index.php">
                                <div style="display: flex; flex-direction: row;">
                                    <div style="width: 50px;">
                                        <span class="sb-nav-link-icon"><i class="fas fa-tv" style="font-size:30px;color:white;"></i></span>                                
                                    </div>
                                    <div>
                                        <span class="text-link"> Dasboard </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="nav-member">
                            <a class="nav-link" href="dokter.php">
                                <div style="display: flex; flex-direction: row;">
                                    <div style="width: 50px;">
                                        <span class="sb-nav-link-icon"><i class="fas fa-user-md" style="font-size:30px;color:white;"></i></span>                                
                                    </div>
                                    <div>
                                        <span class="text-link"> Dokter </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="nav-member">
                            <a class="nav-link" href="pasien.php">
                                <div style="display: flex; flex-direction: row;">
                                    <div style="width: 50px;">
                                        <span class="sb-nav-link-icon"><i class="fas fa-user-injured" style="font-size:30px;color:white"></i></span>                                
                                    </div>
                                    <div>
                                        <span class="text-link"> Pasien </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="nav-member">
                            <a class="nav-link" href="obat.php">
                                <div style="display: flex; flex-direction: row;">
                                    <div style="width: 50px;">
                                        <span class="sb-nav-link-icon"><i class="fas fa-capsules" style="font-size:30px;color:white;"></i></span>                                
                                    </div>
                                    <div>
                                        <span class="text-link"> Obat </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="nav-member">
                            <a class="nav-link" href="rekammedis.php">
                                <div style="display: flex; flex-direction: row;">
                                    <div style="width: 50px;">
                                        <span class="sb-nav-link-icon"><i class="fas fa-cannabis" style="font-size:30px;color:white;"></i></span>                                
                                    </div>
                                    <div>
                                        <span class="text-link"> Rekam Medis </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="nav-member">
                            <a class="nav-link" href="user.php">
                                <div style="display: flex; flex-direction: row;">
                                    <div style="width: 50px;">
                                        <span class="sb-nav-link-icon"><i class="fas fa-user" style="font-size:30px;color:white;"></i></span>                                
                                    </div>
                                    <div>
                                       <span class="text-link"> User  </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="nav-member">
                            <a class="nav-link" href="Logout.php">
                                <div style="display: flex; flex-direction: row;">
                                    <div style="width: 50px;">
                                        <span class="sb-nav-link-icon"><i class="fas fa-sign-out-alt" style="font-size:30px;color:white;"></i></span>                                
                                    </div>
                                    <div>
                                        <span class="text-link"> Logout </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <div class="container pt-5">
              <h2>Dashboard</h2>
              <p>SELAMAT DATANG DI KLINIK </p>
              <p><strong>Note : </strong>Ini adalah tampilan data jumlah dari data ...</p>
              <div class="card-columns">
                <div class="card bg-primary">
                    <div class="card-body text-center">
                       <i class="fas fa-user-md" style="font-size:40px;color:greenyellow;"></i>
                       <br>
                       <p class="card-text text-white">Total Dokter <?=$hitung1;?></p>
                   </div>
               </div>
        <div class="card bg-success">
            <div class="card-body text-center">
                <i class="fas fa-user-injured" style="font-size:40px;color:red"></i>
                <br>
                <p class="card-text text-white">Total Pasien <?=$hitung3;?></p>
            </div>
        </div>
        <div class="card bg-warning">
            <div class="card-body text-center">
                <i class="fas fa-capsules" style="font-size:40px;color:whitesmoke;"></i>
                <br>
                <p class="card-text text-white">Total Obat <?=$hitung2;?></p>
            </div>
        </div>
    </div>
</div>


</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/datatables-demo.js"></script>
</body>
</html>
