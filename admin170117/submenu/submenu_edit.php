<?php
    if(!defined("INDEX")) die("<center><h1>---<h1></center>");
    if (!empty($_POST['ket'])) {
        $sql = $mysqli->query ("SELECT * FROM submenu WHERE id_submenu='$_POST[id]'") or die (mysqli_error());
        $data = mysqli_fetch_array($sql);
        if ($_POST['jenis']==2) {
            $sm = mysqli_fetch_array($mysqli->query("SELECT * from submenu where id_submenu=$_POST[p]"));
        }
        if ($_POST['ket']==1) {
            $jd = "Kategori kajian";
        }elseif ($_POST['ket']==2) {
            $jd = "Sub Katalog";
        }elseif ($_POST['ket']==4) {
            $jd = "Kategori vidio";
        }else{
            $jd = "Nama Kegiatan";
        }
        ?>
        <div class="container-fluid">
            <!-- row (nested) -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Kategori 
                    <?php  
                            if($_POST['jenis']==1){
                                if ($_POST['ket']==1) {
                                    echo "kajian";
                                }elseif ($_POST['ket']==2) {
                                    echo "Katalog";
                                }elseif ($_POST['ket']==4) {
                                    echo "vidio";
                                }else{
                                    echo "portofolio";
                                }
                            }else{
                                echo $sm['judul'];
                            }
                    ?>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <br>
            <!-- panel primary -->
            <div class="panel panel-primary">
                <!-- panel-body -->
                <div class="panel-body">
                    <!-- row (nested) -->
                    <div class="row">
                        <form name="edit" role="form" action="?tampil=submenu_editproses" method="post">
                            <input type="hidden" name="id" value="<?php echo $data['id_submenu'];?>" />
                            <input type="hidden" name="jenis" value="<?php echo $_POST['jenis'];?>" />
                            <input type="hidden" name="ket" value="<?php echo $_POST['ket'];?>" />
                            <input type="hidden" name="p" value="<?php echo $_POST['p'];?>" />
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label><?= $jd; ?></label>
                                    <input autocomplete="off" maxlength="40" autofocus required name="judul" value="<?php echo $data['judul']; ?>" class="form-control" placeholder="<?= $jd; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Urut</label>
                                    <input autocomplete="off" required name="urutan" value="<?php echo $data['urutan']; ?>" class="form-control" placeholder="Urutan">
                                </div>
                                <div class="row">
                                    <?php if($_POST['ket']==5) : ?>
                                        <div class="col-md-4">
                                            <label>Tanggal</label>
                                            <input type="date" name="tanggal" required class="form-control" value="<?= $data['tanggal']; ?>">
                                        </div>
                                    <?php endif; ?>
                                    <div class="col-md-8">
                                        <label>Kategori</label>
                                        <select name="link" class="form-control">
                                        <?php
                                                if ($_POST['ket']==1) {    
                                                echo "<option value='kajian'>Kajian</option>";
                                                }else if ($_POST['ket']==4) {
                                                echo "<option value='vidio'>Vidio</option>";    
                                                }else if ($_POST['ket']==5) {
                                                echo "<option value='$data[link]'>$data[link]</option>";    
                                                }else if ($_POST['ket']==2) {
                                                echo "<option value='katalog'>Sub Katalog</option>";    
                                                }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <br>         
                                <button type="submit" name="tambah" class="btn btn-outline btn-primary">Edit Selesai</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- end panel primary -->
        </div>
        <?php  
    }else{
        echo"<div class='container-fluid'><div class='row'><div class='col-lg-12'><h1 class='page-header'>KONTEN TIDAK ADA</h1></div></div></div>";
    }
    ?>