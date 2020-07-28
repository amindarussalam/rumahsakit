<?php 
include "../header.php";
// use Ramsey\Uuid\Uuid;

// $uuid = Uuid::uuid4()toString();

// printf(
//     // "UUID: %s\nVersion: %d\n",
//     $uuid->toString(),
//     $uuid->getFields()->getVersion()
// );
  ?>
  <div class="box">
  	<h1>Dokter</h1>
		<h4>
		<small>Tambah Data Dokter </small> 
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
			</div>
				</h4>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<form action="proses.php" method="post">
					<div class="form-group">
						<label for="nama">Nama Dokter</label>
						<input type="text" name="nama"	class="form-control" autocomplete="off" required autofocus>
					</div> 
                    <div class="form-group">
						<label for="spesialis">Spesialis</label>
						<input type="text" name="spesialis"	id="spesialis" class="form-control" autocomplete="off" required >
					</div> 
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<input  type="text" name="alamat" id="alamat" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="tlp">No Tlp</label>
						<input type="text" name="tlp"	id="tlp" class="form-control" autocomplete="off" required >
					</div> 
					<div class="form-group pull-right">
						<input type="submit" name="add" value="Simpan" class="btn btn-success">
					</div>
				</form>
			</div>
		</div>	
	</div>
<?php include "../footer.php"; ?>