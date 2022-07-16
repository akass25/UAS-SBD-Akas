<?php
require 'function.php';
require 'cek.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Rekam Medis</title>
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
                        <div class="nav-member">
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
                        <div class="nav-member selected">
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
			<main>
				<div class="container-fluid">
					<h1 class="mt-4">Rekam Medis</h1>
					<div class="card mb-4">
						<div class="card-header">
							<!-- Button to Open the Modal -->
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
								Tambah Rekam Medis
							</button>
						</div>

						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>No</th>
											<th>Tanggal Periksa</th>
											<th>Nama Pasien</th>
											<th>Jenis Kelamin</th>
											<th>Umur</th>
											<th>Keluhan</th>
											<th>Hasil Diagnosa</th>
											<th>Nama Dokter</th>
											<th>Aksi</th>
										</tr>
									</thead>

									<tbody> 

										<?php
										$ambilsemuadatauser = mysqli_query($conn,"SELECT * from berobat
											INNER JOIN pasien on berobat.id_pasien = pasien.id_pasien
											INNER JOIN dokter on berobat.id_dokter = dokter.id_dokter
											");

										$i = 1;

										while($data=mysqli_fetch_array($ambilsemuadatauser)){
											$tgl = $data['tgl_berobat'];
											$namapasien = $data['nama_pasien'];
											$jeniskelamin = $data['jenis_kelamin'];
											$umur=$data['umur'];
											$keluhan=$data['keluhan_pasien'];
											$diagnosa=$data['hasil_diagnosa'];
											$namadokter= $data['nama_dokter'];
											$idberobat = $data['id_berobat'];
											
											
											?>
											<tr>
												<td><?=$i++;?></td>
												<td><?=$tgl;?></td>
												<td><?=$namapasien;?></td>
												<td><?php 
												if($data['jenis_kelamin']=='L'){
													echo 'Laki-laki';
												} else {
													echo 'Perempuan';
												}
											?></td>
											<td><?=$umur;?></td>
											<td><?=$keluhan;?></td>
											<td><?=$diagnosa;?></td>
											<td><?=$namadokter;?></td>


											<td>
												<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?=$idberobat;?>">
													Delete
												</button>
											</td>
										</tr>


										<!-- DELETE Modal -->
										<div class="modal fade" id="delete<?=$idberobat;?>">
											<div class="modal-dialog">
												<div class="modal-content">

													<!-- Modal Header -->
													<div class="modal-header">
														<h4 class="modal-title">Hapus?</h4>
														<button type="button" class="close" data-bs-dismiss="modal">&times;</button>
													</div>

													<!-- Modal body -->
													<form method="post">
														<div class="modal-body">
															Apakah Anda yakin ingin menghapus <?=$namapasien;?> ?
															<input type="hidden" name="id" value="<?=$idberobat;?>">
															<br>
															<br>
															<button type="submit" class="btn btn-danger" name="hapusrekammedis">Hapus</button>
														</div>
													</form>
												</div>
											</div>



											<?php
										};
										?>

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</main>
			<footer class="py-4 bg-light mt-auto">
				<div class="container-fluid">
					<div class="d-flex align-items-center justify-content-between small">

					</div>
				</footer>
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


	<!-- The Modal -->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Tambah Rekam medis</h4>
					<button type="button" class="close" data-bs-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<form method="post">
					<div class="modal-body">
						<input type="date" value="<?=date('Y-m-d');?>" name="tgl" placeholder="Nama" class="form-control" required>
						<br>
						<select name="pasien" class="form-control" required>
							<option value="">-Pilih Nama Pasien-</option>
							<?php 
							$sql_pasien = mysqli_query($conn, "SELECT * from pasien ORDER by nama_pasien");
							while($data_pasien = mysqli_fetch_array($sql_pasien)){
								echo '<option value="'.$data_pasien['id_pasien'].'">'.$data_pasien['nama_pasien'].'</option>';
							}
							?>
						</select>
						<br>
						<textarea name="keluhan" placeholder="Keluhan" class="form-control" required></textarea>
						<br>
						<select name="dokternya" class="form-control">
							<option value="">-Pilih Nama Dokter-</option>
							<?php
							$ambilsemuadatanya = mysqli_query($conn,"SELECT * from dokter ORDER BY nama_dokter");
							while($fetcharray = mysqli_fetch_array($ambilsemuadatanya)) {
								$namadokternya =$fetcharray['nama_dokter'];
								$iddokter = $fetcharray['id_dokter'];
								?>

								<option value="<?=$iddokter;?>"><?=$namadokternya;?></option>

								<?php
							}
							?>
						</select>
						<br>
						<textarea name="diagnosa" placeholder="Diagnosa" class="form-control" required></textarea>
						<br>
						<!-- <input type="text" name="penatalaksanaan" placeholder="Penatalaksanaan" class="form-control" required> -->

						<select name="penatalaksanaan" placeholder="Penatalaksanaan" class="form-control" required>
							<option value="">-Pilih Nama Rujukan-</option>
							<?php 
							$sql_rujukan = mysqli_query($conn, "SELECT * from rujukan");
							while($data_rujukan = mysqli_fetch_array($sql_rujukan)){
								echo '<option value="'.$data_rujukan['nama_rujukan'].'">'.$data_rujukan['nama_rujukan'].'</option>';
							}
							?>
						</select>
						<button type="submit" class="btn btn-primary mt-4" name="addrekammedis">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	</html>
