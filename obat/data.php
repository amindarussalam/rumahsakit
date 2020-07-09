<?php include_once('../header.php'); ?> 
<div class="box">
		<h1>Obat</h1>
		<h4>
		<small>Data Obat </small> 
		</h4>
	<div class="table-table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Obat</th>
					<th>Keterangan</th>
					<th><i class="glyphicon glyphicon-cog"></i></th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no = 1;
				$sql_obat=mysqli_query($con, "SELECT * FROM tb_obat") or die (mysqli_error($con));
				if(mysqli_num_rows($sql_obat) > 0) {
					while($data = mysqli_fetch_array($sql_obat)) { ?>
						<tr>
						<td><?=$no++ ?></td>
						<td><?=$data['nama_obat'] ?></td>
						<td><?=$data['ket_obat'] ?></td>
						<td></td>
						</tr>
					<?php
					}

				}else{
					echo "<tr><td colspan=\"4\" align=\"center\">Data Tidak Ditemukan</td></tr>";
				}

				 ?>
			</tbody>
		</table>
		
	</div>
</div>	

<?php include_once('../footer.php'); ?>