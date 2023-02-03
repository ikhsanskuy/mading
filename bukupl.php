<?php 
include('include/header.php') ;
include('koneksi.php') ;
?>


        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                
                <div class="row gx-4 gx-lg-5">
                    <h1 class="text-center mb-5">Politik</h1>
                <?php $ambil = $conn->query("SELECT * FROM buku WHERE `jenis` LIKE '%politik%'"); ?>
		        <?php while ($data = $ambil->fetch_assoc()) { ?>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <img src="./assets/img/logo.jpg" alt="" width="200">
                                <h4 class="text-uppercase m-0"><?php echo $data['judul']; ?></h4>
                                <hr class="my-4 mx-auto" />
                                <!-- <div class="small text-black-50">4923 Market Street, Orlando FL</div> -->
                                <a class="btn btn-primary mt-3" target=_blank href="read.php?id=<?php echo $data['id']; ?>">Baca</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                
            </div>
        </section>
       
        <!-- Signup-->
<?php 
include('include/footer.php') 
?>