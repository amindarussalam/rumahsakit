<?php 
require_once "../config/config.php";
$chk = $_POST['checked'];
if(!isset($chk)){
	echo "<script>alert('Tidak ada data yang dipilih'); window.location='data.php';</script>";
}else { 

}
?>