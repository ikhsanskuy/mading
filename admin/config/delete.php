<?php 
	
	$ambil = $conn->query("SELECT * FROM buku WHERE id='$_GET[id]'");
	$data = $ambil->fetch_assoc();
	$file = $data['file'];
	if (file_exists("../assets/book/$file"))
	{
		unlink("../assets/book/$file");
	}

	$conn->query("DELETE FROM buku WHERE id='$_GET[id]'");

	echo "<script>alert('Produk Terhapus'); </script>";
	echo "<meta http-equiv='refresh' content='1;url=dashboard.php?halaman=pemrograman'>";
?>