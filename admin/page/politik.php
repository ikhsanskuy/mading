<h2>Data Buku</h2>
<a href="dashboard.php?halaman=add" class="btn btn-primary margin-right">Tambah Buku</a> <br><br>



<?php $ambil = $conn->query("SELECT * FROM buku WHERE `jenis` LIKE '%politik%'"); ?>
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