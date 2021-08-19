
<div class="page-header">
	<h1>Laporan Data Rambu Lalu Lintas</h1>
</div>

<div class="row">
	<form class="form-inline" method="post" action="cetak_laporan.php">
			<div class="form-group">
				<select class="form-control" id="drop" name="kategori">
					<option value="">Semua Kategori</option>
					<?php
					$conn =  mysqli_connect("localhost","root","","gis-rambu");
					$query = mysqli_query($conn ,"SELECT * FROM tb_kategori");

					while($row = mysqli_fetch_array($query)) :
                        # code...
						?>
						<option value="<?php echo $row['id_kategori'] ?>"><?php echo $row['nama_kategori'] ?></option>
					<?php endwhile; ?>
				</select>
			</div>
			<div class="form-group">
				<button class="btn btn-danger" type="submit">
					<span class="glyphicon glyphicon-print"></span> 
					Cetak
				</button><!-- download-alt -->
		</div>
	</form>
</div>
