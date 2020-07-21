<?php include_once('../header.php'); ?>
<div class="box">
		<h1>Poliklinik</h1>
		<h4>
		<small>Tambah Data Poliklinik </small> 
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
			
		</div>	
		</h4> 
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<form action="add.php" method="post">
					<div class="form-group">	
						<label for="count_add"> Banyak Record Yang Akan Ditambahkan </label>
						<input type="text" name="count_add" id="count" pattern="[0-9]+" class="form-control" required>
					</div>	
					<div class="form-group pull-right">
						<input type="submit" name="generate" value="generate" class="btn btn-success">
					</div>				
				</form>				
			</div>	
		</div>
	</div>

<?php include_once('../footer.php'); ?>
