<?php
  //<!--   masukkan isi -->
  // pagination lihat lainya
  // get w adalah kategori katalog tersebut
  if (!isset($_GET['w'])) {
    if (!isset($_POST["keyword"]) or empty($_POST['keyword'])) {
      $sql_ps = $mysqli->query("SELECT * FROM posting WHERE kategori='katalog' ORDER BY tanggal DESC");
      $jd = "semua ";
      $jd2 = "katalog ";
      $nm_titel = "Semua katalog - ";
    }else{
      $keyword = $_POST['keyword'];
      $sql_ps = $mysqli->query("SELECT * FROM posting WHERE judulposting LIKe '%$keyword%' OR isi LIKE '%$keyword%' ORDER BY tanggal DESC");
      $jd = "katalog ";
      $jd2 = $keyword;
      $nm_titel = "Cari " . $keyword . " - ";
    }
  }else{
    $get_w      = $_GET['w'];
    // var_dump($get_w);die;
    $sql_ps     = $mysqli->query("SELECT * FROM posting WHERE jenisposting='$get_w' ORDER BY tanggal DESC");
    $sql_p2     = $mysqli->query("SELECT * FROM posting WHERE jenisposting='$get_w' ORDER BY tanggal DESC");
    $dt_ps2     = mysqli_fetch_array($sql_p2);
    $data_kt    = mysqli_fetch_array($mysqli->query("SELECT * FROM submenu WHERE id_submenu='$dt_ps2[jenisposting]'"));
    $jd         = "katalog ";
    $jd2         = $data_kt['judul'];
    $nm_titel   = "katalog - ";
    $kategori   = $data_kt['judul'];
  }
  $nm_ps = mysqli_num_rows($sql_ps);
  $sql_submenu    = $mysqli->query("SELECT * FROM submenu WHERE link='katalog' ORDER BY tanggal desc");
  ?>

    <!-- Page Content -->
    <div class="container">
  
      <!-- Portfolio Section -->
      <br>
      <h2 class="text-center text-uppercase"><?= $jd; ?><span class="badge badge-secondary"><?= $jd2; ?></span></h2><br>
      <?php if (isset($_GET['w'])) : ?>
      <h5 class="text-uppercase">Kategori : <?= $kategori; ?></h5><br>
      <?php endif; ?>
      <div class="container_ps row">

        <?php 
          while($dt_ps = mysqli_fetch_array($sql_ps)) : 
          $tanggal    = tgl_indonesia($dt_ps['tanggal']);
        ?>
          <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12 portfolio-item pg_kajian">
            <div class="shadow card h-100 bg-light">
              <a href="?tampil=katalog-detail&k=<?= $dt_ps['idposting']; ?>">
                <img class="card-img-top img-zomm" src="gambar/katalog/<?= $dt_ps['gambar']; ?>" alt="">
              </a>
              <div class="card-body">
                <p class="card-title text-center">
                  <strong>
                  <a class="text-hitam" href="?tampil=katalog-detail&k=<?= $dt_ps['idposting']; ?>"><?= strtoupper($dt_ps['judulposting']); ?></a>
                  </strong>
                </p>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
      <!-- /.row -->
      <!-- untuk menambahkan baris agar rapi -->
      <?php
        $num_submenu = mysqli_num_rows($sql_submenu);
        if ($nm_ps<=4) : ?>
          <br>
          <br>
          <br>
          <br>
          <br>
        <?php endif; ?>        
      <!-- untuk menambahkan baris agar rapi -->
        
        <?php if ($nm_ps>=16) : 
            $dt = mysqli_fetch_array($mysqli->query("SELECT wbredup FROM tampil"));
          ?>
        <!-- untuk pagination -->
        <div class="col-md-12">
            <center>
              <button id="tombol_pgkajian" name="tombol-lainnya"  class="btn btn-md btn-dark bg-merah2 bayangan">LIHAT LAINNYA</button>
            </center>
        </div>
        <!-- /.untuk pagination -->
        <?php endif; 
          if ($nm_ps==0) {
            echo "<center><h1>:: Masih Kosong ::</h1></center>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
          }elseif ($nm_ps<5) {
            echo "<br>";         
          }
        ?>
	</div><br>