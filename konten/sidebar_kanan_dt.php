<?php
  $coon         = mysqli_num_rows($mysqli->query("SELECT * FROM submenu WHERE link='katalog'"));
  $coon         = ceil($coon / 2);
  $sql_kt       = $mysqli->query("SELECT * FROM submenu WHERE link='katalog' order by urutan LIMIT 0,$coon");
  $sql_kt2      = $mysqli->query("SELECT * FROM submenu WHERE link='katalog' order by urutan LIMIT $coon,$coon");
?>
<!-- Categories Widget -->

<div class="shadow card mb-4">
  <h5 class="card-header">Kategori katalog</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-6">
        <ul class="list-unstyled mb-0">
          <?php while($iki_satu = mysqli_fetch_array($sql_kt)) : ?>
            <li>
              <a class="text-hitam" href="?tampil=katalog&w=<?= $iki_satu['id_submenu']; ?>" class="text-uppercase"><?= $iki_satu['judul']; ?></a>
            </li>
          <?php endwhile; ?>
        </ul>
      </div>

      <div class="col-6">
        <ul class="list-unstyled mb-0">
          <?php while($iki_dua = mysqli_fetch_array($sql_kt2)) : ?>
            <li>
              <a class="text-hitam" href="?tampil=katalog&w=<?= $iki_dua['id_submenu']; ?>" class="text-uppercase"><?= $iki_dua['judul']; ?></a>
            </li>
          <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Produk -->
<?php
  $sql_portofolio         = $mysqli->query("SELECT * FROM galeri WHERE jenis='galeri' ORDER BY tanggal desc LIMIT 8");
  $nm_portofolio          = mysqli_num_rows($sql_portofolio);
  ?>
<!-- Side Widget -->
<div class="shadow card my-4">
  <h5 class="card-header">katalog Terbaru</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-12">
        <table class="table table-hover">
          <tbody>
            <?php 
              $sql_br = $mysqli->query("SELECT * FROM posting WHERE kategori='katalog' ORDER BY tanggal desc LIMIT 8");
              while($iki_katalog = mysqli_fetch_array($sql_br)) : ?>
                <tr>
                  <td class="text-uppercase">
                    <a class="text-hitam" href="?tampil=katalog-detail&k=<?= $iki_katalog['idposting']; ?>"><?= $iki_katalog['judulposting']; ?></a>
                  </td>
                </tr>
              <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

