<?php 
include "../header.php";
// use Ramsey\Uuid\Uuid;

// $uuid = Uuid::uuid4();

// printf(
//     // "UUID: %s\nVersion: %d\n",
//     $uuid->toString(),
//     $uuid->getFields()->getVersion()
// );
  ?>
  <div class="box">
  	<h1>Obat</h1>
		<h4>
		<small>Tambah Data Obat </small> 
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
			</div>
				</h4>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<form action="proses.php" method="post">
					<div class="form-group">
						<label for="nama">Nama Obat</label>
						<input type="text" name="nama"	class="form-control" autocomplete="off" required autofocus>
					</div> 
					<div class="form-group">
						<label for="ket">Keterangan</label>
						<textarea name="ket" id="ket" class="form-control" required></textarea>
					</div>
					<div class="form-group pull-right">
						<input type="submit" name="add" value="Simpan" class="btn btn-success">
					</div>
				</form>
			</div>
		</div>	
	</div>
<?php include "../footer.php"; ?>