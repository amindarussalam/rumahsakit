<?php 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
require_once "config/config.php";
if(isset($_SESSION['user'])){
  	echo "<script>window.location='".base_url('dashboard')."';</script>";
}else {
	echo "<script>window.location='".base_url('auth/login.php')."';</script>";
}


 ?>
