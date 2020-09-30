<?php
if(isset($_GET['tampil'])) $tampil = $_GET['tampil'];
else $tampil = "beranda";

if ($tampil == "beranda") include("admin170117/beranda.php");
elseif($tampil == "keluar") include("admin170117/keluar.php");
elseif($tampil == "tampilan") include("admin170117/tampilan.php");
elseif($tampil == "statistik") include("admin170117/statistik_dt.php");

elseif($tampil == "submenu") include("admin170117/submenu/submenu_tampil.php");
elseif($tampil == "submenu_tambah") include("admin170117/submenu/submenu_tambah.php");
elseif($tampil == "submenu_tambahproses") include("admin170117/submenu/submenu_tambahproses.php");
elseif($tampil == "submenu_edit") include("admin170117/submenu/submenu_edit.php");
elseif($tampil == "submenu_editproses") include("admin170117/submenu/submenu_editproses.php");
elseif($tampil == "submenu_hapus") include("admin170117/submenu/submenu_hapus.php");

elseif($tampil == "katalog") include("admin170117/katalog/katalog_tampil.php");
elseif($tampil == "katalog_tambah") include("admin170117/katalog/katalog_tambah.php");
elseif($tampil == "katalog_tambahproses") include("admin170117/katalog/katalog_tambahproses.php");
elseif($tampil == "katalog_edit") include("admin170117/katalog/katalog_edit.php");
elseif($tampil == "katalog_editproses") include("admin170117/katalog/katalog_editproses.php");
elseif($tampil == "katalog_hapus") include("admin170117/katalog/katalog_hapus.php");

elseif($tampil == "tutorial") include("admin170117/tutorial/tutorial_tampil.php");
elseif($tampil == "tutorial_tambah") include("admin170117/tutorial/tutorial_tambah.php");
elseif($tampil == "tutorial_tambahproses") include("admin170117/tutorial/tutorial_tambahproses.php");
elseif($tampil == "tutorial_edit") include("admin170117/tutorial/tutorial_edit.php");
elseif($tampil == "tutorial_editproses") include("admin170117/tutorial/tutorial_editproses.php");
elseif($tampil == "tutorial_hapus") include("admin170117/tutorial/tutorial_hapus.php");

elseif($tampil == "pesan") include("admin170117/pesan/pesan_tampil.php");
elseif($tampil == "pesan_lihat") include("admin170117/pesan/pesan_lihat.php");
elseif($tampil == "pesan_hapus") include("admin170117/pesan/pesan_hapus.php");

elseif($tampil == "galeri") include("admin170117/galeri/galeri_tampil.php");
elseif($tampil == "galeri_tambah") include("admin170117/galeri/galeri_tambah.php");
elseif($tampil == "galeri_tambahproses") include("admin170117/galeri/galeri_tambahproses.php");
elseif($tampil == "galeri_edit") include("admin170117/galeri/galeri_edit.php");
elseif($tampil == "galeri_editproses") include("admin170117/galeri/galeri_editproses.php");
elseif($tampil == "galeri_hapus") include("admin170117/galeri/galeri_hapus.php");

elseif($tampil == "kajian") include("admin170117/kajian/kajian_tampil.php");
elseif($tampil == "kajian_tambah") include("admin170117/kajian/kajian_tambah.php");
elseif($tampil == "kajian_tambahproses") include("admin170117/kajian/kajian_tambahproses.php");
elseif($tampil == "kajian_edit") include("admin170117/kajian/kajian_edit.php");
elseif($tampil == "kajian_editproses") include("admin170117/kajian/kajian_editproses.php");
elseif($tampil == "kajian_hapus") include("admin170117/kajian/kajian_hapus.php");

elseif($tampil == "datadiri") include("admin170117/datadiri/datadiri_tampil.php");
elseif($tampil == "datadiri_edit") include("admin170117/datadiri/datadiri_edit.php");
elseif($tampil == "datadiri_editproses") include("admin170117/datadiri/datadiri_editproses.php");
elseif($tampil == "ganti_password") include("admin170117/datadiri/ganti_password.php");
elseif($tampil == "ganti_password_proses") include("admin170117/datadiri/ganti_password_proses.php");

elseif($tampil == "staf") include("admin170117/staf/staf_tampil.php");
elseif($tampil == "staf_tambah") include("admin170117/staf/staf_tambah.php");
elseif($tampil == "staf_tambahproses") include("admin170117/staf/staf_tambahproses.php");
elseif($tampil == "staf_edit") include("admin170117/staf/staf_edit.php");
elseif($tampil == "staf_editproses") include("admin170117/staf/staf_editproses.php");
elseif($tampil == "staf_hapus") include("admin170117/staf/staf_hapus.php");

else 
        echo"<div class='container-fluid'><div class='row'><div class='col-lg-12'><h1 class='page-header'>KONTEN TIDAK ADA</h1></div></div></div>";

?>