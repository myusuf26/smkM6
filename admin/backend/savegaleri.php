<?php 
	include 'koneksi.php';
		
	if($_POST['myModal']){
            $gambar = $_FILES['gambar']['name'];

			$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['gambar']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['gambar']['size'];
            $file_tmp = $_FILES['gambar']['tmp_name'];	
            
             $nama_gambar_baru = '-'.$gambar; 
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, './../foto/'.$nama_gambar_baru);
                    $query = mysqli_query($koneksi,"INSERT INTO tbl_galeri ( gambar) VALUES ( '$nama_gambar_baru')");
					if($query > 0){
						// echo 'FILE BERHASIL DI UPLOAD';
						echo "<script>alert('Data berhasil ditambah.');window.location='./../view/galeri.php';</script>";
					}else{
						// echo 'GAGAL MENGUPLOAD GAMBAR';
						echo "<script>alert('GAGAL MENGUPLOAD GAMBAR');window.location='./../view/galeri.php';</script>";
					}
				}else{
					// echo 'UKURAN FILE TERLALU BESAR';
					echo "<script>alert('UKURAN FILE TERLALU BESAR');window.location='./../view/galeri.php';</script>";
				}
			}else{
				echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN');window.location='./../view/galeri.php';</script>";
				// echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
		}
		?>