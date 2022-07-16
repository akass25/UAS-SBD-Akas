<?php
//koneksi
session_start();
$conn = mysqli_connect("localhost","root","","adminklinik");


//----------------------------------------------------------------------------------------------------------------------------------------
//Tambah User baru
if(isset($_POST['adduser'])){
	$namauser = $_POST['namauser'];
	$namalengkapuser = $_POST['namalengkapuser'];
	$password = $_POST['password'];
	

	$queryinsert = mysqli_query($conn,"insert into user (username,password,nama_lengkap)values('$namauser','$password','$namalengkapuser')");

	if($queryinsert){
		//jika berhasil
		header('location:user.php');

	} else {
		//jika gak berhasil
		header('location:user.php');
	}

}


//Edit User
if(isset($_POST['updatuser'])){
	$namauser = $_POST['namauser'];
	$namalengkapuser = $_POST['namalengkapuser'];
	$password = $_POST['password'];
	$idnya = $_POST['id'];

	$queryupdate = mysqli_query($conn,"update user set username='$namauser', password='$password', nama_lengkap='$namalengkapuser' where id='$idnya'");

	if($queryupdate){
		//jika berhasil
		header('location:user.php');
	} else {
		//jika gak berhasil
		header('location:user.php');
	}

}


//Hapus user
if(isset($_POST['hapususer'])){
	$id = $_POST['id'];

	$querydelete = mysqli_query($conn,"delete from user where iduser='$id'");

	if($querydelete){
		//jika berhasil
		header('location:user.php');
	} else {
		//jika gak berhasil
		header('location:user.php');
	}
}


//Tambah Dokter baru
if(isset($_POST['adddokter'])){
	$nama = $_POST['namadokter'];
	
	

	$queryinsert = mysqli_query($conn,"insert into dokter (nama_dokter)values('$nama')");

	if($queryinsert){
		//jika berhasil
		header('location:dokter.php');

	} else {
		//jika gak berhasil
		header('location:dokter.php');
	}

}


//Edit Dokter
if(isset($_POST['updatdokter'])){
	$namadokter = $_POST['namadokter'];
	$idnya = $_POST['id'];

	$queryupdate = mysqli_query($conn,"update dokter set nama_dokter='$namadokter' where id_dokter='$idnya'");

	if($queryupdate){
		//jika berhasil
		header('location:dokter.php');
	} else {
		//jika gak berhasil
		header('location:dokter.php');
	}

}


//Hapus Dokter
if(isset($_POST['hapusdokter'])){
	$id = $_POST['id'];

	$querydelete = mysqli_query($conn,"delete from dokter where id_dokter='$id'");

	if($querydelete){
		//jika berhasil
		header('location:dokter.php');
	} else {
		//jika gak berhasil
		header('location:dokter.php');
	}
}


//Tambah Pasien baru
if(isset($_POST['addpasien'])){
	$nama = $_POST['namapasien'];
	$jkl = $_POST['jkl'];
	$umur = $_POST['umur'];
	
	

	$queryinsert = mysqli_query($conn,"insert into pasien (nama_pasien,jenis_kelamin,umur)values('$nama','$jkl','$umur')");

	if($queryinsert){
		//jika berhasil
		header('location:pasien.php');

	} else {
		//jika gak berhasil
		header('location:pasien.php');
	}

}


//Edit Pasien
if(isset($_POST['updatpasien'])){
	$namapasien = $_POST['namapasien'];
	$jkl = $_POST['jkl'];
	$umur = $_POST['umur'];
	$idnya = $_POST['id'];

	$queryupdate = mysqli_query($conn,"update pasien set nama_pasien='$namapasien',jenis_kelamin='$jkl',umur='$umur' where id_pasien='$idnya'");

	if($queryupdate){
		//jika berhasil
		header('location:pasien.php');
	} else {
		//jika gak berhasil
		header('location:pasien.php');
	}

}


//Hapus pasien
if(isset($_POST['hapuspasien'])){
	$id = $_POST['id'];

	$querydelete = mysqli_query($conn,"delete from pasien where id_pasien='$id'");

	if($querydelete){
		//jika berhasil
		header('location:pasien.php');
	} else {
		//jika gak berhasil
		header('location:pasien.php');
	}
}


//Tambah Obat baru
if(isset($_POST['addobat'])){
	$nama = $_POST['namaobat'];
	
	

	$queryinsert = mysqli_query($conn,"insert into obat (nama_obat)values('$nama')");

	if($queryinsert){
		//jika berhasil
		header('location:obat.php');

	} else {
		//jika gak berhasil
		header('location:obat.php');
	}

}


//Edit Obat
if(isset($_POST['updatobat'])){
	$namaobat = $_POST['namaobat'];
	$idnya = $_POST['id'];

	$queryupdate = mysqli_query($conn,"update obat set nama_obat='$namaobat' where id_obat='$idnya'");

	if($queryupdate){
		//jika berhasil
		header('location:obat.php');
	} else {
		//jika gak berhasil
		header('location:obat.php');
	}

}


//Hapus Obat
if(isset($_POST['hapusobat'])){
	$id = $_POST['id'];

	$querydelete = mysqli_query($conn,"delete from obat where id_obat='$id'");

	if($querydelete){
		//jika berhasil
		header('location:obat.php');
	} else {
		//jika gak berhasil
		header('location:obat.php');
	}
}


//Tambah Rekamedis baru
if(isset($_POST['addrekam medis'])){
	$tgl = $_POST['tgl'];
	$pasien = $_POST['pasien'];
	$keluhan = $_POST['keluhan'];
	$dokter = $_POST['dokternya'];
	$diagnosa = $_POST['diagnosa'];
	$penatalaksanaan = $_POST['penatalaksanaan'];
	
	

	$queryinsert = mysqli_query($conn,"insert into berobat (id_pasien, id_dokter, tgl_berobat, keluhan_pasien, hasil_diagnosa, penatalaksanaan) values 
		('$pasien','$dokter','$tgl','$keluhan','$diagnosa','$penatalaksanaan')");

	if($queryinsert){
		//jika berhasil
		header('location:rekam medis.php');

	} else {
		//jika gak berhasil
		header('location:rekam medis.php');
	}

}

//Hapus Rekam Medis
if(isset($_POST['hapusrekam medis'])){
	$id = $_POST['id'];

	$querydelete = mysqli_query($conn,"delete from berobat where id_berobat='$id'");

	if($querydelete){
		//jika berhasil
		header('location:rekam medis.php');
	} else {
		//jika gak berhasil
		header('location:rekam medis.php');
	}
}


//Tambah User baru
if(isset($_POST['addregistrasi'])){
	$nama = $_POST['namauser'];
	$namalengkap = $_POST['namalengkap'];
	$password = $_POST['password'];
	
	

	$queryinsert = mysqli_query($conn,"insert into user (username,password,nama_lengkap)values('$nama','$password','$namalengkap')");

	
	if($queryinsert){
		//jika berhasil
		echo "
						<div class='alert alert-success' align='center'>
							Registrasi Berhasil!
						</div>";
	} else {
		//jika gak berhasil
		$_SESSION['pesan'] = 'Data Gagal di tambahkan';
		header('location:regis.php');
	}

}

?>

