<?php 
require_once "../config/config.php";
require "../assets/libs/vendor/autoload.php"; 

use Ramsey\Uuid\Uuid;
$uuid = Uuid::uuid4();

if (isset($_POST['add'])) {
	$uuid = Uuid::uuid4()->toString();
	$identitas = trim(mysqli_real_escape_string($con, $_POST['identitas']));
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $jk = trim(mysqli_real_escape_string($con, $_POST['jk']));
    $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    $tlp = trim(mysqli_real_escape_string($con, $_POST['tlp']));
    $sql_cek_identitas = mysqli_query($con, "SELECT * FROM tb_pasien WHERE nomor_identitas= '$identitas' ")or die(mysqli_error($con));
    if(mysqli_num_rows($sql_cek_identitas) > 0) {
        echo "<script>alert('Nomor Identitas Sudah Pernah Dientri'); window.location='add.php';</script>";
    } else {
    mysqli_query($con, "INSERT INTO tb_pasien (id_pasien,nomor_identitas,nama_pasien,jenis_kelamin,alamat,no_tlp) VALUES
									 ('$uuid','$identitas','$nama','$jk','$alamat','$tlp')") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
    }
}else if(isset($_POST['edit'])){
	
}

?>