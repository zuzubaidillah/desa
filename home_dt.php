  <?php
  // if(!defined("INDEX")) header("Location: index.php");

    //<!-- slider gambar slide -->
     include("slide_gmb_dt.php");
    //<!-- /.slider gambar slide -->
  $sql_ps = $mysqli->query("SELECT * FROM posting WHERE kategori='kegiatan' ORDER BY tanggal desc LIMIT 8");
  $sql_gl = $mysqli->query("SELECT * FROM galeri WHERE jenis='galeri' ORDER BY tanggal desc LIMIT 8");
  
  $no = 1;
?>  
  <?php
    $dt_tp = mysqli_fetch_array($mysqli->query("SELECT * FROM tampil WHERE id_tampil=1"));
  ?>
  <div class="container">
    <div class="main"></div>
  </div>