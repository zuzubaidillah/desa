<?php
$koneksi = mysql_pconnect("localhost","root","") or die ("Koneksi Gagal dibentuk");
if ($koneksi){
mysql_select_db("dbdb") or die("Tidak Dapat Memilih Database");
   }
?>