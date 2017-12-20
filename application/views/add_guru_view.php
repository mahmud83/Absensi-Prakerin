<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tambah Data Guru Pembimbing</h1>
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
                            <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/admin/insertguru">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" placeholder="Username" name="username" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" placeholder="Password" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama Guru</label>
                                    <input class="form-control" placeholder="Nama Guru" name="nama_guru" required>
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" id="foto" name="foto" required>
                                </div>
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <input class="form-control" placeholder="No. Telepon" name="telp" type="number" required>
                                </div>
                                <div class="form-group">
                                    <label>Pembimbing di Kota</label>
                                    <select class="form-control" name="kota">
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
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <input type="submit" name="insert" value="TAMBAH" class="btn btn-primary btn-flat">
                                        </div>
                                        <div class="col-sm-4">
                                            <a href="<?php echo base_url(); ?>index.php/admin" class="btn btn-danger btn-flat">KEMBALI</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
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