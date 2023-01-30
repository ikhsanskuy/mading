<h2>Data Buku</h2>
<a href="dashboard.php?halaman=add" class="btn btn-primary">Tambah Buku</a> <br><br>
<!-- <div>
	<select name="jenis" id="jenis">
	<option value="pemrograman">Pemrograman</option><?php $pemrograman = $ambil = $conn->query("SELECT * FROM buku"); ?>
	<option value="filsafat">Filsafat</option>
	<option value="politik">Politik</option>
	</select>
</div> -->
<!-- <table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Judul Buku</th>
			<th>Jenis Buku</th>
			<th>Deskripsi</th>
			<th>File</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor = 1; ?>
		<?php $ambil = $conn->query("SELECT * FROM buku"); ?>
		<?php while ($data = $ambil->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $data['judul']; ?></td>
				<td><?php echo $data['jenis']; ?></td>
				<td><?php echo $data['deskripsi']; ?></td>
				<td><a href="../assets/book/<?php echo $data['file']; ?>" target="_blank"><?php echo $data['file']; ?></a></td>
				<td>
					<a href="dashboard.php?halaman=update&id=<?php echo $data['id']; ?>" class="btn btn-warning">Ubah</a>
					<a href="dashboard.php?halaman=delete&id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a>
				</td>
			</tr>
			<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table> -->



<?php $ambil = $conn->query("SELECT * FROM buku"); ?>
		<?php while ($data = $ambil->fetch_assoc()) { ?>
	<div class="col-sm-4">
		
        <div class="thumbnail">
          <div class="caption text-center">
				<h1 id="thumbnail-label"><?php echo $data['judul']; ?></h1>
				<h4 id="thumbnail-label"><?php echo $data['jenis']; ?></h4>
				<p id="thumbnail-label"><?php echo $data['deskripsi']; ?></p>
				<a href="dashboard.php?halaman=update&id=<?php echo $data['id']; ?>" class="btn btn-warning">Ubah</a>
				<a href="dashboard.php?halaman=delete&id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a>
          </div>
        </div>
		
    </div>
	<?php } ?>