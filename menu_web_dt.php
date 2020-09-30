<!-- if(!defined("INDEX")) die("<center><h1>---<h1></center>"); -->
  <!-- <style>
    .dropdown:hover>.dropdown-menu{
      display: block;
    }
  </style> -->
  <?php
    $dt=mysqli_fetch_array($mysqli->query("SELECT * FROM tampil WHERE id_tampil=1"));
  ?>
    <nav class="navbar fixed-top navbar-expand-lg navbar-merah" style="background-color: <?= $dt['wmatas']; ?> !important;">
      
        <a href="?tampil=home">
          <img src="gambar/header.png" height="37">
        </a>
        
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="?tampil=home"><strong>HOME</strong></a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <strong>KATALOG</strong>
              </a>
              <div class="dropdown-menu dropdown-menu-left"  aria-labelledby="navbarDropdownPortfolio">
                <?php  
                  $sql_sm2 = $mysqli->query("SELECT * FROM submenu WHERE id_menu=2 and jenis=1 order by urutan");
                  while ($tm_sm2 = mysqli_fetch_array($sql_sm2)) :
                  ?>
                    <a  class="dropdown-item" href="?tampil=katalog&w=<?= $tm_sm2['id_submenu'] ?>"><?= strtolower($tm_sm2['judul']); ?></a>
                  <?php endwhile; ?>
              </div>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="?tampil=tutorial"><strong>TUTORIAL</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?tampil=portofolio"><strong>PORTOFOLIO</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?tampil=kontak"><strong>KONTAK</strong></a>
            </li>
          </ul>
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;

          <!-- form pencarian -->
          <!-- <ul class="nav navbar-nav navbar-right"> -->
            <form action="?tampil=katalog" class="form-inline my-2 my-lg-0" method="post">
              <input name="keyword" class="form-control mr-sm-2" type="search" placeholder="Cari Kode katalog disini" aria-label="Search" autocomplete="off">
              <!-- <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button> -->
            </form>
          <!-- </ul> -->
          <!-- /. form pencarian -->

        </div>
      
    </nav>
