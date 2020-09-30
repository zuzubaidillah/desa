<?php
if(!defined("INDEX")) die("<center><h1>---<h1></center>");
    $dt=mysqli_fetch_array($mysqli->query("SELECT * FROM tampil WHERE id_tampil=1"));
    if(isset($_REQUEST['submit'])){
        $tahun      = htmlspecialchars($_REQUEST['tahun']);
        $email      = htmlspecialchars($_REQUEST['email']);
        $notelpon   = htmlspecialchars($_REQUEST['notelpon']);
        $ig         = htmlspecialchars($_REQUEST['ig']);
        $linkig     = htmlspecialchars($_REQUEST['linkig']);
        $fb         = htmlspecialchars($_REQUEST['fb']);
        $linkfb     = htmlspecialchars($_REQUEST['linkfb']);
        $yt         = htmlspecialchars($_REQUEST['yt']);
        $linkyt     = htmlspecialchars($_REQUEST['linkyt']);
        $wmatas     = htmlspecialchars($_REQUEST['wmatas']);
        $wbredup     = htmlspecialchars($_REQUEST['wbredup']);
        $whredup     = htmlspecialchars($_REQUEST['whredup']);
        $info       = addslashes($_REQUEST['info']);
        $sql=$mysqli->query("UPDATE tampil SET 
            notelpon    = '$notelpon',
            email       = '$email',
            ig       = '$ig',
            linkig       = '$linkig',
            fb       = '$fb',
            linkfb       = '$linkfb',
            yt       = '$yt',
            linkyt       = '$linkyt',
            info        = '$info',
            wmatas        = '$wmatas',
            wbredup        = '$wbredup',
            whredup        = '$whredup',
            tahun       = '$tahun' WHERE id_tampil=1");
        if($sql > 0){
            echo "
                    <div class='container-fluid'>
                        <div class='row'>
                            <div class='col-lg-12'>
                                <center>
                                    <img src='gambar/loading2.gif'>
                                    <h2 class='page-header' style='display: inline-block;'>
                                        Loading. . . . .
                                    </h2>
                                </center>
                            </div>
                        </div>
                    </div>
                    ";
            echo "<meta http-equiv ='refresh'content='1; url=?tampil=tampilan'>";
            die();
        } else {
            echo 'ada ERROR dg query';
        }
    } else {
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2>Update Tampilan</h2>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <hr>
        <form method="post" action="?tampil=tampilan" class="form-horizontal" role="form" > 
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">E-mail</label>
                <div class="col-sm-7">
                    <input autocomplete="off" type="email" maxlength="50" value="<?php echo $dt['email']; ?>" class="form-control" id="email" name="email" placeholder="E-Mail" required>
                </div>
            </div>
            <div class="form-group">
                <label for="ig" class="col-sm-2 control-label">Instagram</label>
                <div class="col-sm-7">
                    <input autocomplete="off" type="ig" maxlength="60" value="<?php echo $dt['ig']; ?>" class="form-control" id="ig" name="ig" placeholder="Akun Instagram" required>
                </div>
            </div>
            <div class="form-group">
                <label for="linkig" class="col-sm-2 control-label">Link IG</label>
                <div class="col-sm-9">
                    <input autocomplete="off" type="linkig" maxlength="50" value="<?php echo $dt['linkig']; ?>" class="form-control" id="linkig" name="linkig" placeholder="Link IG" required>
                </div>
            </div>
            <div class="form-group">
                <label for="fb" class="col-sm-2 control-label">Facebook</label>
                <div class="col-sm-7">
                    <input autocomplete="off" type="fb" maxlength="50" value="<?php echo $dt['fb']; ?>" class="form-control" id="fb" name="fb" placeholder="Akun Facebook" required>
                </div>
            </div>
            <div class="form-group">
                <label for="linkfb" class="col-sm-2 control-label">Link FB</label>
                <div class="col-sm-9">
                    <input autocomplete="off" type="linkfb" maxlength="50" value="<?php echo $dt['linkfb']; ?>" class="form-control" id="linkfb" name="linkfb" placeholder="Link FB" required>
                </div>
            </div>
            <div class="form-group">
                <label for="yt" class="col-sm-2 control-label">YouTube</label>
                <div class="col-sm-7">
                    <input autocomplete="off" type="yt" maxlength="50" value="<?php echo $dt['yt']; ?>" class="form-control" id="yt" name="yt" placeholder="Akun Youtube" required>
                </div>
            </div>
            <div class="form-group">
                <label for="linkyt" class="col-sm-2 control-label">link YT</label>
                <div class="col-sm-9">
                    <input autocomplete="off" type="linkyt" maxlength="50" value="<?php echo $dt['linkyt']; ?>" class="form-control" id="linkyt" name="linkyt" placeholder="Link YT" required>
                </div>
            </div>
            <div class="form-group">
                <label for="notelpon" class="col-sm-2 control-label">No Telpon</label>
                <div class="col-sm-6">
                    <input type="text" maxlength="15" value="<?php echo $dt['notelpon']; ?>" class="form-control" id="notelpon" name="notelpon" placeholder="No Telpon" required>
                </div>
            </div>
            <div class="form-group">
                <label for="tahun" class="col-sm-2 control-label">Tahun</label>
                <div class="col-sm-5">
                    <input autocomplete="off" type="text" value="<?php echo $dt['tahun']; ?>" class="form-control" id="tahun" name="tahun" placeholder="Tahun" required>
                </div>
            </div>
            <div class="form-group">
                <label for="tahun" class="col-sm-2 control-label">Warna Menu</label>
                <div class="col-sm-5">
                    <input autocomplete="off" type="text" value="<?php echo $dt['wmatas']; ?>" class="form-control" id="wmatas" name="wmatas" placeholder="color" required>
                </div>
            </div>
            <div class="form-group">
                <label for="tahun" class="col-sm-2 control-label">Warna Bawah Home</label>
                <div class="col-sm-5">
                    <input autocomplete="off" type="text" value="<?php echo $dt['wbredup']; ?>" class="form-control" id="wbredup" name="wbredup" placeholder="color" required>
                </div>
            </div>
            <div class="form-group">
                <label for="tahun" class="col-sm-2 control-label">Warna Hover:Home</label>
                <div class="col-sm-5">
                    <input autocomplete="off" type="text" value="<?php echo $dt['whredup']; ?>" class="form-control" id="whredup" name="whredup" placeholder="color" required>
                </div>
            </div>
            <div class="form-group">
                <label for="info" class="col-sm-2 control-label">Pengumuman</label>
                <div class="col-sm-5">
                    <textarea id="info" name="info"><?php echo $dt['info']; ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
                <div class="col-md-2" style="background: #F0F8FF; width: 100px;">#F0F8FF</div>
                <div class="col-md-2" style="background: #FAEBD7; width: 100px;">#FAEBD7</div>
                <div class="col-md-2" style="background: #00FFFF; width: 100px;">#00FFFF</div>    
                <div class="col-md-2" style="background: #7FFFD4; width: 100px;">#7FFFD4</div>    
                <div class="col-md-2" style="background: #F0FFFF; width: 100px;">#F0FFFF</div>    
                <div class="col-md-2" style="background: #F5F5DC; width: 100px;">#F5F5DC</div>    
                <div class="col-md-2" style="background: #FFE4C4; width: 100px;">#FFE4C4</div>    
                <div class="col-md-2" style="background: #000000; width: 100px;">#000000</div>    
                <div class="col-md-2" style="background: #FFEBCD; width: 100px;">#FFEBCD</div>    
                <div class="col-md-2" style="background: #0000FF; width: 100px;">#0000FF</div>    
                <div class="col-md-2" style="background: #8A2BE2; width: 100px;">#8A2BE2</div>    
                <div class="col-md-2" style="background: #A52A2A; width: 100px;">#A52A2A</div>    
                <div class="col-md-2" style="background: #DEB887; width: 100px;">#DEB887</div>    
                <div class="col-md-2" style="background: #5F9EA0; width: 100px;">#5F9EA0</div>    
                <div class="col-md-2" style="background: #7FFF00; width: 100px;">#7FFF00</div>    
                <div class="col-md-2" style="background: #D2691E; width: 100px;">#D2691E</div>    
                <div class="col-md-2" style="background: #FF7F50; width: 100px;">#FF7F50</div>    
                <div class="col-md-2" style="background: #6495ED; width: 100px;">#6495ED</div>    
                <div class="col-md-2" style="background: #FFF8DC; width: 100px;">#FFF8DC</div>    
                <div class="col-md-2" style="background: #DC143C; width: 100px;">#DC143C</div>    
                <div class="col-md-2" style="background: #00FFFF; width: 100px;">#00FFFF</div>    
                <div class="col-md-2" style="background: #00008B; width: 100px;">#00008B</div>    
                <div class="col-md-2" style="background: #008B8B; width: 100px;">#008B8B</div>    
                <div class="col-md-2" style="background: #B8860B; width: 100px;">#B8860B</div>    
                <div class="col-md-2" style="background: #A9A9A9; width: 100px;">#A9A9A9</div>
                <div class="col-md-2" style="background: #006400; width: 100px;">#006400</div>    
                <div class="col-md-2" style="background: #BDB76B; width: 100px;">#BDB76B</div>    
                <div class="col-md-2" style="background: #8B008B; width: 100px;">#8B008B</div>    
                <div class="col-md-2" style="background: #556B2F; width: 100px;">#556B2F</div>    
                <div class="col-md-2" style="background: #FF8C00; width: 100px;">#FF8C00</div>    
                <div class="col-md-2" style="background: #9932CC; width: 100px;">#9932CC</div>    
                <div class="col-md-2" style="background: #8B0000; width: 100px;">#8B0000</div>    
                <div class="col-md-2" style="background: #E9967A; width: 100px;">#E9967A</div>    
                <div class="col-md-2" style="background: #8FBC8F; width: 100px;">#8FBC8F</div>    
                <div class="col-md-2" style="background: #483D8B; width: 100px;">#483D8B</div>    
                <div class="col-md-2" style="background: #2F4F4F; width: 100px;">#2F4F4F</div>    
                <div class="col-md-2" style="background: #00CED1; width: 100px;">#00CED1</div>    
                <div class="col-md-2" style="background: #9400D3; width: 100px;">#9400D3</div>    
                <div class="col-md-2" style="background: #FF1493; width: 100px;">#FF1493</div>    
                <div class="col-md-2" style="background: #00BFFF; width: 100px;">#00BFFF</div>    
                <div class="col-md-2" style="background: #696969; width: 100px;">#696969</div>    
                <div class="col-md-2" style="background: #1E90FF; width: 100px;">#1E90FF</div>   
                <div class="col-md-2" style="background: #B22222; width: 100px;">#B22222</div>    
                <div class="col-md-2" style="background: #FFFAF0; width: 100px;">#FFFAF0</div>    
                <div class="col-md-2" style="background: #228B22; width: 100px;">#228B22</div>    
                <div class="col-md-2" style="background: #FF00FF; width: 100px;">#FF00FF</div>    
                <div class="col-md-2" style="background: #DCDCDC; width: 100px;">#DCDCDC</div>    
                <div class="col-md-2" style="background: #F8F8FF; width: 100px;">#F8F8FF</div>    
                <div class="col-md-2" style="background: #FFD700; width: 100px;">#FFD700</div>    
                <div class="col-md-2" style="background: #DAA520; width: 100px;">#DAA520</div>   
                <div class="col-md-2" style="background: #808080; width: 100px;">#808080</div>
                <div class="col-md-2" style="background: #008000; width: 100px;">#008000</div>    
                <div class="col-md-2" style="background: #ADFF2F; width: 100px;">#ADFF2F</div>    
                <div class="col-md-2" style="background: #F0FFF0; width: 100px;">#F0FFF0</div>    
                <div class="col-md-2" style="background: #FF69B4; width: 100px;">#FF69B4</div>    
                <div class="col-md-2" style="background: #CD5C5C; width: 100px;">#CD5C5C</div>    
                <div class="col-md-2" style="background: #4B0082; width: 100px;">#4B0082</div>    
                <div class="col-md-2" style="background: #FFFFF0; width: 100px;">#FFFFF0</div>    
                <div class="col-md-2" style="background: #F0E68C; width: 100px;">#F0E68C</div>    
                <div class="col-md-2" style="background: #E6E6FA; width: 100px;">#E6E6FA</div>    
                <div class="col-md-2" style="background: #FFF0F5; width: 100px;">#FFF0F5</div>    
                <div class="col-md-2" style="background: #7CFC00; width: 100px;">#7CFC00</div>    
                <div class="col-md-2" style="background: #FFFACD; width: 100px;">#FFFACD</div>    
                <div class="col-md-2" style="background: #ADD8E6; width: 100px;">#ADD8E6</div>    
                <div class="col-md-2" style="background: #F08080; width: 100px;">#F08080</div>    
                <div class="col-md-2" style="background: #E0FFFF; width: 100px;">#E0FFFF</div>    
                <div class="col-md-2" style="background: #FAFAD2; width: 100px;">#FAFAD2</div>    
                <div class="col-md-2" style="background: #D3D3D3; width: 100px;">#D3D3D3</div>    
                <div class="col-md-2" style="background: #90EE90; width: 100px;">#90EE90</div>    
                <div class="col-md-2" style="background: #FFB6C1; width: 100px;">#FFB6C1</div>    
                <div class="col-md-2" style="background: #FFA07A; width: 100px;">#FFA07A</div>    
                <div class="col-md-2" style="background: #20B2AA; width: 100px;">#20B2AA</div>    
                <div class="col-md-2" style="background: #87CEFA; width: 100px;">#87CEFA</div>    
                <div class="col-md-2" style="background: #778899; width: 100px;">#778899</div>    
                <div class="col-md-2" style="background: #B0C4DE; width: 100px;">#B0C4DE</div>    
                <div class="col-md-2" style="background: #FFFFE0; width: 100px;">#FFFFE0</div>    
                <div class="col-md-2" style="background: #00FF00; width: 100px;">#00FF00</div>    
                <div class="col-md-2" style="background: #32CD32; width: 100px;">#32CD32</div>    
                <div class="col-md-2" style="background: #FAF0E6; width: 100px;">#FAF0E6</div>    
                <div class="col-md-2" style="background: #FF00FF; width: 100px;">#FF00FF</div>    
                <div class="col-md-2" style="background: #800000; width: 100px;">#800000</div>    
                <div class="col-md-2" style="background: #66CDAA; width: 100px;">#66CDAA</div>    
                <div class="col-md-2" style="background: #0000CD; width: 100px;">#0000CD</div>    
                <div class="col-md-2" style="background: #BA55D3; width: 100px;">#BA55D3</div>    
                <div class="col-md-2" style="background: #9370DB; width: 100px;">#9370DB</div>    
                <div class="col-md-2" style="background: #3CB371; width: 100px;">#3CB371</div>    
                <div class="col-md-2" style="background: #7B68EE; width: 100px;">#7B68EE</div>    
                <div class="col-md-2" style="background: #00FA9A; width: 100px;">#00FA9A</div>    
                <div class="col-md-2" style="background: #48D1CC; width: 100px;">#48D1CC</div>    
                <div class="col-md-2" style="background: #C71585; width: 100px;">#C71585</div>    
                <div class="col-md-2" style="background: #191970; width: 100px;">#191970</div>    
                <div class="col-md-2" style="background: #F5FFFA; width: 100px;">#F5FFFA</div>    
                <div class="col-md-2" style="background: #FFE4E1; width: 100px;">#FFE4E1</div>    
                <div class="col-md-2" style="background: #FFE4B5; width: 100px;">#FFE4B5</div>    
                <div class="col-md-2" style="background: #FFDEAD; width: 100px;">#FFDEAD</div>    
                <div class="col-md-2" style="background: #000080; width: 100px;">#000080</div>    
                <div class="col-md-2" style="background: #FDF5E6; width: 100px;">#FDF5E6</div>    
                <div class="col-md-2" style="background: #808000; width: 100px;">#808000</div>    
                <div class="col-md-2" style="background: #6B8E23; width: 100px;">#6B8E23</div>    
                <div class="col-md-2" style="background: #FFA500; width: 100px;">#FFA500</div>    
                <div class="col-md-2" style="background: #FF4500; width: 100px;">#FF4500</div>    
                <div class="col-md-2" style="background: #DA70D6; width: 100px;">#DA70D6</div>    
                <div class="col-md-2" style="background: #EEE8AA; width: 100px;">#EEE8AA</div>    
                <div class="col-md-2" style="background: #98FB98; width: 100px;">#98FB98</div>    
                <div class="col-md-2" style="background: #AFEEEE; width: 100px;">#AFEEEE</div>    
                <div class="col-md-2" style="background: #DB7093; width: 100px;">#DB7093</div>    
                <div class="col-md-2" style="background: #FFEFD5; width: 100px;">#FFEFD5</div>    
                <div class="col-md-2" style="background: #FFDAB9; width: 100px;">#FFDAB9</div>    
                <div class="col-md-2" style="background: #CD853F; width: 100px;">#CD853F</div>    
                <div class="col-md-2" style="background: #FFC0CB; width: 100px;">#FFC0CB</div>    
                <div class="col-md-2" style="background: #DDA0DD; width: 100px;">#DDA0DD</div>    
                <div class="col-md-2" style="background: #B0E0E6; width: 100px;">#B0E0E6</div>    
                <div class="col-md-2" style="background: #800080; width: 100px;">#800080</div>    
                <div class="col-md-2" style="background: #663399; width: 100px;">#663399</div>    
                <div class="col-md-2" style="background: #FF0000; width: 100px;">#FF0000</div>    
                <div class="col-md-2" style="background: #BC8F8F; width: 100px;">#BC8F8F</div>    
                <div class="col-md-2" style="background: #4169E1; width: 100px;">#4169E1</div>    
                <div class="col-md-2" style="background: #8B4513; width: 100px;">#8B4513</div>    
                <div class="col-md-2" style="background: #FA8072; width: 100px;">#FA8072</div>    
                <div class="col-md-2" style="background: #F4A460; width: 100px;">#F4A460</div>    
                <div class="col-md-2" style="background: #2E8B57; width: 100px;">#2E8B57</div>    
                <div class="col-md-2" style="background: #FFF5EE; width: 100px;">#FFF5EE</div>    
                <div class="col-md-2" style="background: #A0522D; width: 100px;">#A0522D</div>    
                <div class="col-md-2" style="background: #C0C0C0; width: 100px;">#C0C0C0</div>    
                <div class="col-md-2" style="background: #87CEEB; width: 100px;">#87CEEB</div>    
                <div class="col-md-2" style="background: #6A5ACD; width: 100px;">#6A5ACD</div>    
                <div class="col-md-2" style="background: #708090; width: 100px;">#708090</div>    
                <div class="col-md-2" style="background: #FFFAFA; width: 100px;">#FFFAFA</div>    
                <div class="col-md-2" style="background: #00FF7F; width: 100px;">#00FF7F</div>    
                <div class="col-md-2" style="background: #4682B4; width: 100px;">#4682B4</div>    
                <div class="col-md-2" style="background: #D2B48C; width: 100px;">#D2B48C</div>    
                <div class="col-md-2" style="background: #008080; width: 100px;">#008080</div>    
                <div class="col-md-2" style="background: #D8BFD8; width: 100px;">#D8BFD8</div>    
                <div class="col-md-2" style="background: #FF6347; width: 100px;">#FF6347</div>    
                <div class="col-md-2" style="background: #40E0D0; width: 100px;">#40E0D0</div>    
                <div class="col-md-2" style="background: #EE82EE; width: 100px;">#EE82EE</div>    
                <div class="col-md-2" style="background: #F5DEB3; width: 100px;">#F5DEB3</div>    
                <div class="col-md-2" style="background: #FFFFFF; width: 100px;">#FFFFFF</div>    
                <div class="col-md-2" style="background: #F5F5F5; width: 100px;">#F5F5F5</div>    
                <div class="col-md-2" style="background: #FFFF00; width: 100px;">#FFFF00</div>    
                <div class="col-md-2" style="background: #9ACD32; width: 100px;">#9ACD32</div>
            
        </form>
    </div>
<?php
    }
?>