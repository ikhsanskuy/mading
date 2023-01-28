<?php $ambil=$conn->query("SELECT * FROM admin"); ?>
<?php while($pecah=$ambil->fetch_assoc() ) { ?>

<p> 
	<h2 style="padding-bottom: 40px;"></h2>
	<h2 style="font-size: 80px; text-align: center;"> Selamat Datang Admin</h2>
</p>

<?php } ?>