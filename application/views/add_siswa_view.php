<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="page-header"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Data Siswa</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-6">
            <h1 class="page-header"><i class="fa fa-download"></i>&nbsp;&nbsp;Import Data Siswa</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-green">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/admin/insertsiswa">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" placeholder="Username" name="username" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" placeholder="Password" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama Siswa</label>
                                    <input class="form-control" placeholder="Nama siswa" name="nama_siswa" required>
                                </div>
                                <div class="form-group">
                                    <label>Foto Siswa</label>
                                    <input type="file" id="foto" name="foto" required accept="image/*">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-control" name="jk">
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <select class="form-control select2" name="kelas">
                                        <option>XII RPL 1</option>
                                        <option>XII RPL 2</option>
                                        <option>XII RPL 3</option>
                                        <option>XII RPL 4</option>
                                        <option>XII RPL 5</option>
                                        <option>XII RPL 6</option>
                                        <option>XII TKJ 1</option>
                                        <option>XII TKJ 2</option>
                                        <option>XII TKJ 3</option>
                                        <option>XII TKJ 4</option>
                                        <option>XII TKJ 5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <input class="form-control" placeholder="No. Telepon" name="telp" type="number" required>
                                </div>
<<<<<<< HEAD
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Kota</label>
                                        <select class="form-control select2" name="kota" id="kota" onchange="nganu(this)">
                                            <option>Bali</option>
                                            <option>Balikpapan</option>
                                            <option>Bandung</option>
                                            <option>Gresik & Tuban</option>
                                            <option>Jakarta</option>
                                            <option>Jember</option>
                                            <option>Kediri</option>
                                            <option>Malang</option>
                                            <option>Mataram</option>
                                            <option>Pasuruan</option>
                                            <option>Semarang</option>
                                            <option>Sidoarjo</option>
                                            <option>Solo & Madiun</option>
                                            <option>Surabaya</option>
                                            <option>Yogyakarta</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Industri Prakerin</label>
                                        <select class="form-control select2" name="industri" id="industri" required  onchange="ngono(this)">
                                            <?php 
                                                foreach ($industri as $ind) {
                                                    echo '<option>'.$ind->nama_industri.'</option>';
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Guru Pembimbing</label>
                                    <select class="form-control select2" name="gurupem" id="gurupem" required>
                                            <?php 
                                                foreach ($guru as $pem) {
                                                    echo '<option>'.$pem->nama_guru.'</option>';
                                                }
                                            ?>
                                        </select>
=======
                                <div class="form-group">
                                    <label>Kota</label>
                                    <select class="form-control select2" name="kota">
                                        <option>Bali</option>
                                        <option>Balikpapan</option>
                                        <option>Bandung</option>
                                        <option>Gresik & Tuban</option>
                                        <option>Jakarta</option>
                                        <option>Jember</option>
                                        <option>Kediri</option>
                                        <option>Malang</option>
                                        <option>Mataram</option>
                                        <option>Pasuruan</option>
                                        <option>Semarang</option>
                                        <option>Sidoarjo</option>
                                        <option>Solo & Madiun</option>
                                        <option>Surabaya</option>
                                        <option>Yogyakarta</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Industri Prakerin</label>
                                    <input class="form-control" placeholder="Industri Prakerin" name="industri" required>
>>>>>>> parent of a4f1801... add guru in tb_siswa
                                </div>
                                <div class="form-group">
                                    <label>Alamat Selama Prakerin</label>
                                    <textarea class="form-control" name="alamat"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4 pull-left">
                                            <input type="submit" name="insert" value="TAMBAH" class="btn btn-primary btn-flat">
                                        </div>
                                        <div class="col-sm-4 pull-right">
                                            <a href="<?php echo base_url(); ?>index.php/admin" class="btn btn-danger btn-flat" style="float: right;">KEMBALI</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <div class="box box-default">
                                <div class="box-header with-border">
                                  <h3 class="box-title">Import Data Siswa</h3>
                                </div>
                                <div class="box-body alert-info">
                                    <a href="<?php echo base_url(); ?>format_siswa.xlsx"><h4 style="color: white; font-weight: 800; padding-bottom: 3px;">Download Format Import</h4></a>
                                    <?php echo form_open_multipart('admin/importsiswa');?>
                                        <input type="file" name="import" size="20" id='import' required class="pull-left" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"/>
                                        <input type="submit" value="Import Data Siswa" class="pull-right" style="color: black;"/>
                                    </form>
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- <script>
    function nganu(element) {
        var ini = document.getElementById("industri");
        ini.disabled = false;
    }
    function ngono(element) {
        var itu = document.getElementById("gurupem");
        itu.disabled = false;
    }
</script> -->