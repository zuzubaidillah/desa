<html>
<head>
 <title>Penghitung pengunjung</title>
</head>
<body>
<?php
 session_start();
 include "hitung.php";
 echo "<div style='margin-top:50px; font-family: Segoe UI; font-weight: lighter;'><center>";
 echo "<b>---- Informasi Pengunjung ----</b>
";
 echo "<img src='gambar/2.bmp'/> ".$_SERVER['REMOTE_ADDR']." (IP Anda)
";
 switch($browser){
 case "Firefox" : echo "<img src='gambar/browser/firefox.gif' width='15px' height='15px'/> ".$browser." (Browser Anda)
"; break;
 case "Chrome/Opera" : echo "<img src='gambar/browser/chrome.gif' width='15px' height='15px'/> ".$browser." (Browser Anda)
"; break;
 case "IE" : echo "<img src='gambar/browser/ie.gif' width='15px' height='15px'/> ".$browser." (Browser Anda)
"; break;
 }
 echo "<b>------ Pengunjung Hari Ini -------</b>
";
 echo "<img src='gambar/1.bmp'/> <b style='color:red'>".$hari_ini['hari_ini']."</b>
";
 echo "<b>------ Pengunjung Kemarin -------</b>
";
 echo "<img src='gambar/2.png'/> <b style='color:red'>".$kemarin['kemarin']."</b>
";
 echo "<b>------ Total Pengunjung -------</b>
";
 echo "<img src='gambar/1.png'/> <b style='color:red'>".$sql['total']."</b>
";
 echo "</center></div>";
?>
</body>
</html>