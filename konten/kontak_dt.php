<?php $nm_titel   = "Kontak - "; ?>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">KONTAK
        <small>Digital Offset</small>
      </h1>
      <?php
        $dt_tampil = mysqli_fetch_array($mysqli->query("SELECT * FROM tampil"));

      ?>
      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4 card shadow">
          <!-- Embedded Google Map -->
          <!-- <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps"></iframe> -->
          <iframe width="100%" height="400px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.425984191815!2d106.8039185271115!3d-6.338832515397383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMjAnMjAuNSJTIDEwNsKwNDgnMTQuMSJF!5e0!3m2!1sen!2sid!4v1539906197883" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen></iframe>
          <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.580486862367!2d112.25620461423962!3d-7.511475676189983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e786aacdd7c83cb%3A0x82ac5b65804b6708!2sBaina+Fashion!5e0!3m2!1sen!2sid!4v1536678047437" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4 card shadow"><hr>
          <h3>Digital Offset</h3>
          <p>
            <abbr title="Lokasi"><img src="template/IKONS/konten/pin_2.svg"></abbr>Jl.  - Indonesia
          </p>
          <p>
            <a target="_blank" href="https://api.whatsapp.com/send?phone=<?=$dt_tampil['notelpon']; ?>&text=Hallo" title="Phone"><img src="template/IKONS/konten/speech_bubbles.svg"></a> <?= $dt_tampil['notelpon']; ?>
          </p>
          <p>
            <a target="_blank" href="mailto:<?= $dt_tampil['email']; ?>" title="Email"><img src="template/IKONS/konten/mail.svg"></a> <?= $dt_tampil['email']; ?>
          </p>
          <p>
            <a target="_blank" href="<?= $dt_tampil['linkfb']; ?>" title="Facebook"><img src="template/IKONS/konten/facebook_2.svg"></a> <?= $dt_tampil['fb']; ?>
          </p>
          <p>
            <a target="_blank" href="<?= $dt_tampil['linkig']; ?>" title="Instagram"><img src="template/IKONS/konten/instagram.svg"></a> <?= $dt_tampil['ig']; ?>
          </p>
          <p>
            <a target="_blank" href="<?= $dt_tampil['linkyt']; ?>" title="YouTube"><img src="template/IKONS/konten/youtube.svg"></a> <?= $dt_tampil['yt']; ?>
          </p><hr>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->