<?php

    // if(!defined("INDEX")) die("<h1>---<h1>");
    if(isset($_GET['tampil'])) $tampil = $_GET['tampil'];

    else $tampil = "home";

    if ($tampil == "home") include("home_dt.php");
    elseif($tampil == "tutorial") include("konten/tutorial_dt.php");
    elseif($tampil == "tutorial-detail") include("konten/tutorial_dt_detail.php");
    elseif($tampil == "katalog") include("konten/katalog_dt.php");
    elseif($tampil == "katalog-detail") include("konten/katalog_dt_detail.php");
    elseif($tampil == "portofolio") include("konten/portofolio_dt.php");
    elseif($tampil == "portofolio-album") include("konten/portofolio_album_dt.php");
    elseif($tampil == "tutorial") include("konten/tutorial_dt.php");
    elseif($tampil == "tutorial-detail") include("konten/tutorial_dt_detail.php");
    elseif($tampil == "preview_hp") include("konten/preview_hp.php");
	elseif($tampil == "foto") include("konten/foto_dt.php");
    elseif($tampil == "foto-album") include("konten/foto_album_dt.php");
    elseif($tampil == "kontak") include("konten/kontak_dt.php");
    else include 'konten/error404_dt.php';

?>