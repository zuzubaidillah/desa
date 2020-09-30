<?php
if(!defined("INDEX")) die("<center><h1>---<h1></center>");
    if (!empty($_POST['jenis'])) {
        if ($_POST['jenis']==2) {
            $sm = mysqli_fetch_array($mysqli->query("SELECT * from submenu where id_submenu=$_POST[p]"));
        }
        if ($_POST['ket']==1) {
            $jd = "Kategori Tutorial";
        }elseif ($_POST['ket']==2) {
            $jd = "submenu Katalog";
        }elseif ($_POST['ket']==4) {
            $jd = "Kategori Vidio";
        }else{
            $jd = "Nama Kegiatan";
        }
        ?>
        <div class="container-fluid">
            <!-- row (nested) -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Kategori 
                        <?php 
                            if($_POST['jenis']==1){
                                if ($_POST['ket']==1) {
                                    echo "tutorial";
                                }elseif ($_POST['ket']==2) {
                                    echo "Katalog";
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
                        <form name="tambah" method="post" action="?tampil=submenu_tambahproses">
                            <input type="hidden" name="id" value="<?php echo $_SESSION['id_user'];?>">
                            <input type="hidden" name="jenis" value="<?php echo $_POST['jenis'];?>">
                            <input type="hidden" name="ket" value="<?php echo $_POST['ket'];?>">
                            <input type="hidden" name="p" value="<?php echo $_POST['p'];?>">
                            <div class="col-lg-12">
                                <?php if($_POST['jenis']==1){?>
                                <div class="form-group">
                                    <label><?= $jd; ?></label>
                                    <input autocomplete="off" maxlength="40" autofocus required name="judul" class="form-control" placeholder="<?= $jd; ?>">
                                </div>
                                <?php } ?>
                                <div class="form-group">
                                    <label>No Urut</label>
                                    <input autofocus autocomplete="off" required name="urutan" class="form-control" placeholder="Urutan">
                                </div>
                                <div class="row">
                                    <?php if($_POST['ket']==5) : ?>
                                        <div class="col-md-4">
                                            <label>Tanggal</label>
                                            <input type="date" name="tanggal" required class="form-control">
                                        </div>
                                    <?php endif; ?>
                                    <div class="col-md-8">
                                        <label>Link</label>
                                        <select name="link" class="form-control">
                                        <?php
                                            if ($_POST['ket']==1) {    
                                            echo "<option value='tutorial'>Tutorial</option>";
                                            }else if ($_POST['ket']==5) {
                                            echo "<option value='galeri'>portofolio</option>";
                                            }else if ($_POST['ket']==2) {
                                            echo "<option value='katalog'>Sub Katalog</option>";    
                                            }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <button type="tambah" name="tambah" class="btn btn-outline btn-primary">Simpan</button>
                            </div>
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