<?php
  //<!--   masukkan isi -->
  // pagination lihat lainya
  $sql_submenu    = $mysqli->query("SELECT * FROM submenu WHERE link='galeri' ORDER BY tanggal desc");
  $jd = "PORTO ";
  $nm_titel = "Portofolio - ";
  $nm_ps = mysqli_num_rows($sql_submenu);
  ?>

    <!-- Page Content -->
    <div class="container">  
      <!-- Portfolio Section -->
      <br>
      <h2 class="text-center"><?= $jd; ?><span class="badge badge-secondary">FOLIO</span></h2><br>
      <div class="container_ps row">
        <?php 
          while($dt_submenu   = mysqli_fetch_array($sql_submenu)) : 
            $tanggal          = tgl_indonesia($dt_submenu['tanggal']);
            $sql_galeri       = $mysqli->query("SELECT * FROM galeri WHERE jenis='galeri' and kategori=$dt_submenu[id_submenu] ORDER BY tanggal desc");
            $dt_galeri        = mysqli_fetch_array($sql_galeri);
        ?>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-12 berita-item pg_kajian">
            <div class="shadow card h-100 bg-light">
              <a href="?tampil=portofolio-album&k=<?= $dt_submenu['id_submenu']; ?>">
                <img class="card-img-top item210" src="gambar/galeri/<?= $dt_galeri['gambar']; ?>" alt="">
              </a>
              <div class="card-body">
                <p class="card-title">
                  <strong>
                  <a class="text-hitam" href="?tampil=portofolio-album&k=<?= $dt_submenu['id_submenu']; ?>"><?= strtoupper($dt_submenu['judul']); ?></a>
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

      <?php
        $num_submenu = mysqli_num_rows($sql_submenu);
        if ($num_submenu>=16) : ?>
        <!-- untuk pagination -->
        <div class="col-md-12">
            <center>
              <button id="tombol_pgkajian" name="tombol-lainnya" class="btn btn-md btn-dark bayangan">LIHAT LAINNYA</button>
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