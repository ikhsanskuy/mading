<h2>Tambah Buku</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Judul Buku</label>
		<input type="text" class="form-control" name="judul">
	</div>
	<div class="form-group">
		<label for="jenis">Jenis Buku</label> <br>

		<select name="jenis" id="jenis">
		
		<option value="pemrograman">Pemrograman</option>
		<option value="filsafat">Filsafat</option>
		<option value="politik">Politik</option>

		</select>
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea type="text" class="form-control" name="deskripsi" rows="10"></textarea>
	</div>
	<div class="form-group">
		<label>File</label>
		<input type="file" class="form-control" name="file" accept="application/pdf"></input>
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save'])) {

	$judul      = ($_POST['judul']);
	$jenis      = ($_POST['jenis']);
	$deskripsi      = ($_POST['deskripsi']);

	$file = $_FILES['file']['name'];
	$lokasi = $_FILES['file']['tmp_name'];
		
	@move_uploaded_file($lokasi, "../assets/book/$file");

	$query = mysqli_query($conn, "INSERT INTO `buku` (`judul`,`jenis`,`deskripsi`,`file`) 
					VALUES ('$judul','$jenis','$deskripsi','$file')");


	if ($query) {
		echo "<div class='alert alert-info'>Data Tersimpan</div>";
		echo "<meta http-equiv='refresh' content='1;url=dashboard.php?halaman=pemrograman'>";
	} else {
		echo "<div class='alert alert-danger'>Data Gagal Tersimpan</div>";
		echo "<meta http-equiv='refresh' content='1;url=dashboard.php?halaman=add'>";
	}
}
?>

