 <div class="card">
	<div class="card-header">
		<strong>Data Mahasiswa</strong>
	</div>
	<div class="card-body">
		<form action="?page=mahasiswa-show" method="POST">
			<div class="input-group mb-3">
				<input type="text" class="form-control" name="keywoard" placeholder="Masukan NIM atau Nama ...">
				<div class="input-group-append">
					<button class="btn btn-primary" type="submit" value="Cari" id="button-search" name="search">Cari!</button>
				</div>
			</div>
		</form>
		<a href="?page=mahasiswa-add" class="btn btn-primary mb-2">Tambah Data</a>
		<a href="../mahasiswa/mahasiswa_print.php" target="_BLANK" class="btn btn-success mb-2">Cetak Data</a>
		<div class="table-responsive">
			<table class="table table-sm table-bordered table-hover m-0">
				<?php 

				$limit = 5;
				$page = isset($_GET['halaman']) ? (int) $_GET["halaman"] : 1;
				$mulai = ($page > 1) ? ($page*$limit)-$limit : 0;
				$query = mysqli_query($con, "SELECT * FROM mahasiswa LIMIT $mulai,$limit") or die(mysqli_error);
				?>
				<thead>
					<tr>
						<th>No</th>
						<th>NIM</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Jenis Alamat</th>
						<th>Email</th>
						<th>Telepon</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					if(isset($_POST['search'])) {
						$keyword = trim($_POST['keyword']);
						if(!empty($keyword)) {
							$query = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nim LIKE '%".$keyword ."%' OR nama LIKE '%".$keyword ."%");
						}
					}
					$no = $mulai + 1;
					while ($data = mysqli_fetch_array($query)) {
					?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $data['nim']; ?></td>
						<td><?php echo $data['nama']; ?></td>
						<td><?php echo $data['alamat']; ?></td>
						<td><?php echo $data['jenis_kelamin']; ?></td>
						<td><?php echo $data['email']; ?></td>
						<td><?php echo $data['telepon']; ?></td>
						<td><a class="btn btn-sm btn-success" href="?page=mahasiswa-edit&id=<?php echo $data['id'];?>" onclick="return confirm('Anda yakin mau menghapus item ini?')">Hapus</a></td>
					</tr>
					<?php $no++; } ?>
				</tbody>
			</table>
		</div>
		<?php
		$result = mysqli_query($con, "SELECT * FROM mahasiswa");
		$total_records = mysqli_num_rows($result);
		?>
		<p>Jumlah Data : <?php echo $total_records; ?></p>
		<!-- <nav class="mb-5">
			<ul class="pagination justify-content-end"> -->
		</nav>
	</div>
</div>