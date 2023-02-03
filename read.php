<?php 
include('include/header.php') ;
include('koneksi.php') ;
?>


        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                
                <div class="row gx-4 gx-lg-5">
                    
                <?php $ambil = $conn->query("SELECT * FROM buku WHERE id='$_GET[id]'"); ?>
		        <?php while ($data = $ambil->fetch_assoc()) { ?>
                    <h1 class="text-center mb-3"><?php echo $data['judul']; ?></h1><hr style="width:50%;margin:0 auto;;">
                    <h5 class="text-center mt-3 mb"><?php echo $data['jenis']; ?></h5>
                    <!-- <object data="assets/book/<?php echo $data['file']; ?>" width="300" height="800"></object> -->
                    <iframe src="assets/book/<?php echo $data['file']; ?>" width="300" height="800"></iframe>
                    <!-- <embed type="application/pdf" src="assets/book/<?php echo $data['file']; ?>" width="300" height="800"> -->
                    
                </div>
                
            </div>

             <!-- Media top -->

        </section>

        <section>
        <form method="post" enctype="multipart/form-data">
            <div class="container my-5 py-5">
                <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-10 col-xl-8">
                    <div class="card">
                    
                        <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                        <h1 class="text-center">Comment Section</h1>
                            <div class="d-flex flex-start w-100">
                            <img class="rounded-circle shadow-1-strong me-3"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar" width="40"
                                height="40" />
                            
                                <div class="form-outline w-100">
                                    <input class="form-control mb-3" type="hidden" style="width:50%" name="buku" value="<?php echo $data['judul']; ?>">
                                    <input class="form-control mb-3" type="text" style="width:50%" name="nama" placeholder="Isi nama anda">
                                    <textarea class="form-control" id="textAreaExample" rows="4" name="comment" style="background: #fff;"  placeholder="Isi pesan anda"></textarea>
                                </div>

                                </div>
                                <div class="float-end mt-2 pt-1">
                                <button type="submit" class="btn btn-primary btn-sm" name="save">Post comment</button>
                                </div>
                            
                            <?php } ?>
                        </div>
                        
                    </div>
                </div>
                </div>
            </div>
            </form>
        </section>

        <?php
        if (isset($_POST['save'])) {

            $buku      = ($_POST['buku']);
            $nama      = ($_POST['nama']);
            $comment      = ($_POST['comment']);

            $query = mysqli_query($conn, "INSERT INTO `comment` (`buku`,`nama`,`comment`) 
                            VALUES ('$buku','$nama','$comment')");


            if ($query) {
                echo "<script>alert('Komentar anda telah berhasil');</script>";
                echo "<meta http-equiv='refresh' content='1'>";
            } else {
                echo "<script>alert('Komentar anda telah berhasil');</script>";
                echo "<meta http-equiv='refresh' content='1'>";
            }
        }
        ?>
       
        <!-- Signup-->
<?php 
include('include/footer.php') 
?>