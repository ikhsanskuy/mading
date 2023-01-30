<?php
include '../koneksi.php';
$ambil = $conn->query("SELECT * FROM buku WHERE id='$_GET[id]'");
$data = $ambil->fetch_assoc();
?>

<h2>Tambah Buku</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Judul Buku</label>
		<input type="text" class="form-control" name="judul" value="<?php echo $data['judul']; ?>">
	</div>
	<div class="form-group">
		<label>Jenis Buku</label>
		<input type="text" class="form-control" name="jenis" value="<?php echo $data['jenis']; ?>">
	</div>
	<div class="form-group">
		<label for="jenis">Jenis Buku</label> <br>

		<select name="jenis" id="jenis">
		
		<option value="<?php echo $data['jenis']; ?>" disabled selected >Pilihan saat ini : <?php echo $data['jenis']; ?></option>
		<option value="pemrograman">Pemrograman</option>
		<option value="filsafat">Filsafat</option>
		<option value="politik">Politik</option>

		</select>
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi" rows="10"> <?php echo $data['deskripsi']; ?></textarea>
	</div>
	<div class="form-group">
		<label>File</label><br>
        <a href="../assets/book/<?php echo $data['file']; ?>" target="_blank"><?php echo $data['file']; ?></a>
		<input type="file" class="form-control" name="file" accept="application/pdf" value="<?php echo $data['file']; ?>"></input>
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
		
	

    if (!empty($lokasi)) {
		@move_uploaded_file($lokasi, "../assets/book/$file");

        $query = mysqli_query($conn, "UPDATE `buku` SET 
        `judul` = '$judul', 
        `jenis` = '$jenis', 
        `deskripsi` = '$deskripsi', 
        `file` = '$file' 
        WHERE `id` = '$_GET[id]'");
    }
    else{
        $query = mysqli_query($conn, "UPDATE `buku` SET 
        `judul` = '$judul', 
        `jenis` = '$jenis', 
        `deskripsi` = '$deskripsi', 
        `file` = '$file' 
        WHERE `id` = '$_GET[id]'");
    }

	if ($query) {
		echo "<div class='alert alert-info'>Data Tersimpan</div>";
		echo "<meta http-equiv='refresh' content='1;url=dashboard.php?halaman=pemrograman'>";
	} else {
		echo "<div class='alert alert-danger'>Data Gagal Tersimpan</div>";
		echo "<meta http-equiv='refresh' content='1;url=dashboard.php?halaman=pemrograman'>";
	}
}
?>

