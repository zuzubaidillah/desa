<?php
if(!defined("INDEX")) die("<center><h1>---<h1></center>");
    if (!empty($_POST['level'])) {
    	if ($_POST['level']==1) {
			$bagian				= strtolower(htmlspecialchars($_POST['bagian']));
	        $username 			= strtolower(stripslashes($_POST['username']));
	        $password 			= $mysqli->real_escape_string($_POST['password']);
	        // username sudah ada atau belum
	        $result = mysqli_num_rows($mysqli->query("SELECT username FROM user WHERE username = '$username'"));
	        if ($result > 0) {
	                echo"<div class='container-fluid'><div class='row'><div class='col-lg-12'><h1 class='page-header'>USERNAME SUDAH DIPAKAI!!</h1></div></div></div>";
	                echo "<meta http-equiv ='refresh'content='1; url=?tampil=staf&level=1'>";
	            die;
	        }
			// enkripsi password
			$password = password_hash($password, PASSWORD_DEFAULT);
    	}elseif ($_POST['level']==2) {
			$iduser 			= uniqid();
			$nama_pic    		= $_FILES['gambar']['name'];
			$lokasi_gambar  	= $_FILES['gambar']['tmp_name'];
			$tipe_gambar    	= $_FILES['gambar']['type'];
			$job 				= strtolower(htmlspecialchars($_POST['job']));
	        if ($nama_pic != "") {
	            // yang diupload gambar atau bukan
	            $ekstensigambarvalid = ['jpg','jpeg','png'];
	            $ekstensigambar = explode('.', $nama_pic);
	            $ekstensigambar = strtolower(end($ekstensigambar));
				$nama_gambar 		= $iduser.'.'.$ekstensigambar;
	            // ada nggak sebuah string didalam array
	            if (!in_array($ekstensigambar, $ekstensigambarvalid)) {
	                echo"<div class='container-fluid'><div class='row'><div class='col-lg-12'><h1 class='page-header'>bukan gambar!!</h1></div></div></div>";
					echo "<meta http-equiv ='refresh'content='1; url=?tampil=staf&level=$_POST[level]'>";
	                die();
	            }
	        }
    	}

		$nama 				= strtolower(htmlspecialchars($_POST['nama']));
		$alamat 			= strtolower(htmlspecialchars($_POST['alamat']));
        

    	if ($_POST['level']==1) {
		    $mysqli->query("INSERT INTO user SET
			nama		= '$nama',
			job			= '$job',
			alamat		= '$alamat',
			username	= '$username',
			password	= '$password',
			lp			= '$_POST[lp]',
			created		= '$_POST[id_user]',
			bagian		= '$bagian',
			level		= '1'") or die(mysqli_error());
    	}elseif ($_POST['level']==2) {
		    move_uploaded_file($lokasi_gambar,"gambar/user/$nama_gambar");
		    $mysqli->query("INSERT INTO user SET
			nama		= '$nama',
			job			= '$job',
			alamat		= '$alamat',
			username	= '',
			password	= '',
			lp			= '$_POST[lp]',
			created		= '010618',
			bagian		= '-',
			foto  		= '$nama_gambar',
			level		= '2'") or die(mysqli_error());
    	}

		echo "
			<div class='container-fluid'>
				<div class='row'>
					<div class='col-lg-12'>
						<center>
							<img src='gambar/loading2.gif'>
							<h2 class='page-header' style='display: inline-block;'>
								Loading. . . . .
							</h2>
						</center>
					</div>
				</div>
			</div>
			";
		echo "<meta http-equiv ='refresh'content='1; url=?tampil=staf&level=$_POST[level]'>";
    }else{
        echo"<div class='container-fluid'><div class='row'><div class='col-lg-12'><h1 class='page-header'>KONTEN TIDAK ADA</h1></div></div></div>";
        echo "<meta http-equiv ='refresh'content='1; url=?tampil=beranda'>";
    }

?>