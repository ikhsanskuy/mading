<a href="dashboard.php?halaman=add">tes</a>
<?php  
if (isset($_POST['send'])) {
        
        $npm            = mysqli_real_escape_string($con, $_POST['npm']);
        $nama_mahasiswa = mysqli_real_escape_string($con, $_POST['nama_mhs']);
        $kelas          = mysqli_real_escape_string($con, $_POST['kelas']);
        $no_telpon      = mysqli_real_escape_string($con, $_POST['no_telp']);



        $nomor_acak = round(microtime(true));
        $foto = $_FILES['foto']['name'];
        $tipe_foto = $_FILES['foto']['type'];
        $file_tmp = $_FILES['foto']['tmp_name'];
        
        $foto_baru = $nomor_acak. '_' .$foto;
    	
    	$a = mysqli_query($con, "SELECT foto FROM data_mhs WHERE npm='$npm' ");
        $cek = mysqli_fetch_assoc($a);
        $folder = "../assets/foto/$cek[foto]";
    	unlink($folder);
        $del=mysqli_query($con, "DELETE foto FROM data_mhs WHERE npm='$npm' "); 
    	
        if ($insertdata) {
            if($tipe_foto == "image/jpeg" || $tipe_foto == "image/png" || $tipe_foto == "image/jpg"){

                $insertdata     = mysqli_query($con, "INSERT INTO `data_mhs` (`nama_mhs`, `kelas`, `no_telp`, fo) 
                                              VALUES ('$nama_mahasiswa', '$kelas', '$no_telpon') ");
                
                $update = mysqli_query($con, "UPDATE foto SET foto='$foto_baru' WHERE npm='$npm' ");
            
                @move_uploaded_file($file_tmp, "../assets/foto/".$foto_baru);
        
                if ($update){
                    echo"<script>alert('Foto Berhasil Di Ubah');
                    location.href='../pages/berkas/Biodata/';</script>";
                }else{
                    echo"<script>alert('Foto Gagal Di Ubah');
                    location.href='../pages/berkas/Biodata/';</script>";
                }
            }else{
                echo"<script>alert('Maaf format file berkas selain JPG/JPEG/PNG tidak di dukung');
                    location.href='../pages/berkas/Biodata/';</script>";
            }
        
            echo "Berhasil nambah data baru";
        }else {
            echo "Gagal nambah data baru";
        }

    }
?>