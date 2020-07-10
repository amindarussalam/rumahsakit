<?php 
// error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
require_once "../config/config.php";
require "../assets/libs/vendor/autoload.php"; 

use Ramsey\Uuid\Uuid;
$uuid = Uuid::uuid4();

if (isset($_POST['add'])) {
	$uuid = Uuid::uuid4()->toString();
	// $uuid = Uuid::uuid4()->toString;
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
	$ket = trim(mysqli_real_escape_string($con, $_POST['ket']));
	mysqli_query($con, "INSERT INTO tb_obat (id_obat,nama_obat,ket_obat) VALUES
									 ('$uuid','$nama','$ket')") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
}else if(isset($_POST['edit'])){
	$id = $_POST['id'];
	$uuid = Uuid::uuid4()->toString();
	// $uuid = Uuid::uuid4()->toString;
	$nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
	$ket = trim(mysqli_real_escape_string($con, $_POST['ket']));
	mysqli_query($con, "UPDATE tb_obat SET nama_obat = '$nama', ket_obat='$ket' WHERE id_obat='$id'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";

}

?>