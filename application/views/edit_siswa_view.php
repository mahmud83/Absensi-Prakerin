<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Data Siswa</h1>
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
                            <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/admin/updatesiswa/<?php echo $id_sw = $this->uri->segment(3); ?>">
                                <div class="form-group">
                                    <label>Nama Siswa</label>
                                    <input class="form-control" placeholder="Nama siswa" name="nama_siswa" required value="<?php echo $detil->nama_siswa; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Foto Siswa</label>
                                    <input type="file" id="foto" name="foto" required>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    
                                    <select class="form-control" name="jk">
                                        <?php 
                                            if($detil->jenis_kelamin == "Laki-Laki")
                                            {
                                                echo "<option selected>Laki-Laki</option>
                                                      <option>Perempuan</option>";
                                            } else if($detil->jenis_kelamin == "Perempuan")
                                            {
                                                echo "<option >Laki-Laki</option>
                                                      <option selected>Perempuan</option>";
                                            }
                                        ?>
                                    </select>
                                    
                                </div>
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <select class="form-control select2" name="kelas">
                                         <?php 
                                            if($detil->kelas == "XII RPL 1")
                                            {
                                                echo "<option selected>XII RPL 1</option>
                                                      <option>XII RPL 2</option>
                                                      <option>XII RPL 3</option>
                                                      <option>XII RPL 4</option>
                                                      <option>XII RPL 5</option>
                                                      <option>XII RPL 6</option>
                                                      <option>XII TKJ 1</option>
                                                      <option>XII TKJ 2</option>
                                                      <option>XII TKJ 3</option>
                                                      <option>XII TKJ 4</option>
                                                      <option>XII TKJ 5</option>";
                                            } else if($detil->kelas == "XII RPL 2")
                                            {
                                                echo "<option>XII RPL 1</option>
                                                      <option selected>XII RPL 2</option>
                                                      <option>XII RPL 3</option>
                                                      <option>XII RPL 4</option>
                                                      <option>XII RPL 5</option>
                                                      <option>XII RPL 6</option>
                                                      <option>XII TKJ 1</option>
                                                      <option>XII TKJ 2</option>
                                                      <option>XII TKJ 3</option>
                                                      <option>XII TKJ 4</option>
                                                      <option>XII TKJ 5</option>";
                                            } else if($detil->kelas == "XII RPL 3")
                                            {
                                                echo "<option>XII RPL 1</option>
                                                      <option>XII RPL 2</option>
                                                      <option selected>XII RPL 3</option>
                                                      <option>XII RPL 4</option>
                                                      <option>XII RPL 5</option>
                                                      <option>XII RPL 6</option>
                                                      <option>XII TKJ 1</option>
                                                      <option>XII TKJ 2</option>
                                                      <option>XII TKJ 3</option>
                                                      <option>XII TKJ 4</option>
                                                      <option>XII TKJ 5</option>";
                                            } else if($detil->kelas == "XII RPL 4")
                                            {
                                                echo "<option>XII RPL 1</option>
                                                      <option>XII RPL 2</option>
                                                      <option>XII RPL 3</option>
                                                      <option selected>XII RPL 4</option>
                                                      <option>XII RPL 5</option>
                                                      <option>XII RPL 6</option>
                                                      <option>XII TKJ 1</option>
                                                      <option>XII TKJ 2</option>
                                                      <option>XII TKJ 3</option>
                                                      <option>XII TKJ 4</option>
                                                      <option>XII TKJ 5</option>";
                                            } else if($detil->kelas == "XII RPL 5")
                                            {
                                                echo "<option>XII RPL 1</option>
                                                      <option>XII RPL 2</option>
                                                      <option>XII RPL 3</option>
                                                      <option>XII RPL 4</option>
                                                      <option selected>XII RPL 5</option>
                                                      <option>XII RPL 6</option>
                                                      <option>XII TKJ 1</option>
                                                      <option>XII TKJ 2</option>
                                                      <option>XII TKJ 3</option>
                                                      <option>XII TKJ 4</option>
                                                      <option>XII TKJ 5</option>";
                                            } else if($detil->kelas == "XII RPL 6")
                                            {
                                                echo "<option>XII RPL 1</option>
                                                      <option>XII RPL 2</option>
                                                      <option>XII RPL 3</option>
                                                      <option>XII RPL 4</option>
                                                      <option>XII RPL 5</option>
                                                      <option selected>XII RPL 6</option>
                                                      <option>XII TKJ 1</option>
                                                      <option>XII TKJ 2</option>
                                                      <option>XII TKJ 3</option>
                                                      <option>XII TKJ 4</option>
                                                      <option>XII TKJ 5</option>";
                                            } else if($detil->kelas == "XII TKJ 1")
                                            {
                                                echo "<option>XII RPL 1</option>
                                                      <option>XII RPL 2</option>
                                                      <option>XII RPL 3</option>
                                                      <option>XII RPL 4</option>
                                                      <option>XII RPL 5</option>
                                                      <option>XII RPL 6</option>
                                                      <option selected>XII TKJ 1</option>
                                                      <option>XII TKJ 2</option>
                                                      <option>XII TKJ 3</option>
                                                      <option>XII TKJ 4</option>
                                                      <option>XII TKJ 5</option>";
                                            } else if($detil->kelas == "XII TKJ 2")
                                            {
                                                echo "<option>XII RPL 1</option>
                                                      <option>XII RPL 2</option>
                                                      <option>XII RPL 3</option>
                                                      <option>XII RPL 4</option>
                                                      <option>XII RPL 5</option>
                                                      <option>XII RPL 6</option>
                                                      <option>XII TKJ 1</option>
                                                      <option selected>XII TKJ 2</option>
                                                      <option>XII TKJ 3</option>
                                                      <option>XII TKJ 4</option>
                                                      <option>XII TKJ 5</option>";
                                            } else if($detil->kelas == "XII TKJ 3")
                                            {
                                                echo "<option>XII RPL 1</option>
                                                      <option>XII RPL 2</option>
                                                      <option>XII RPL 3</option>
                                                      <option>XII RPL 4</option>
                                                      <option>XII RPL 5</option>
                                                      <option>XII RPL 6</option>
                                                      <option>XII TKJ 1</option>
                                                      <option>XII TKJ 2</option>
                                                      <option slected>XII TKJ 3</option>
                                                      <option>XII TKJ 4</option>
                                                      <option>XII TKJ 5</option>";
                                            } else if($detil->kelas == "XII TKJ 4")
                                            {
                                                echo "<option>XII RPL 1</option>
                                                      <option>XII RPL 2</option>
                                                      <option>XII RPL 3</option>
                                                      <option>XII RPL 4</option>
                                                      <option>XII RPL 5</option>
                                                      <option>XII RPL 6</option>
                                                      <option>XII TKJ 1</option>
                                                      <option>XII TKJ 2</option>
                                                      <option>XII TKJ 3</option>
                                                      <option selected>XII TKJ 4</option>
                                                      <option>XII TKJ 5</option>";
                                            } else if($detil->kelas == "XII TKJ 5")
                                            {
                                                echo "<option>XII RPL 1</option>
                                                      <option>XII RPL 2</option>
                                                      <option>XII RPL 3</option>
                                                      <option>XII RPL 4</option>
                                                      <option>XII RPL 5</option>
                                                      <option>XII RPL 6</option>
                                                      <option>XII TKJ 1</option>
                                                      <option>XII TKJ 2</option>
                                                      <option>XII TKJ 3</option>
                                                      <option>XII TKJ 4</option>
                                                      <option selected>XII TKJ 5</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <input class="form-control" placeholder="No. Telepon" name="telp" type="number" required value="<?php echo $detil->no_telp_siswa; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Kota</label>
                                    <select class="form-control" name="kota">
                                        <?php 
                                            if($detil->kota == "Bali")
                                            {
                                                echo "<option selected>Bali</option>
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
                                                      <option>Yogyakarta</option>";
                                            } else if($detil->kota == "Balikpapan")
                                            {
                                                echo "<option>Bali</option>
                                                      <option selected>Balikpapan</option>
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
                                                      <option>Yogyakarta</option>";
                                            } else if($detil->kota == "Bandung")
                                            {
                                                echo "<option>Bali</option>
                                                      <option>Balikpapan</option>
                                                      <option selected>Bandung</option>
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
                                                      <option>Yogyakarta</option>";
                                            } else if($detil->kota == "Gresik & Tuban")
                                            {
                                                echo "<option>Bali</option>
                                                      <option>Balikpapan</option>
                                                      <option>Bandung</option>
                                                      <option selected>Gresik & Tuban</option>
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
                                                      <option>Yogyakarta</option>";
                                            } else if ($detil->kota == "Jakarta") {
                                              echo "<option>Bali</option>
                                                    <option>Balikpapan</option>
                                                    <option>Bandung</option>
                                                    <option>Gresik & Tuban</option>
                                                    <option selected>Jakarta</option>
                                                    <option>Jember</option>
                                                    <option>Kediri</option>
                                                    <option>Malang</option>
                                                    <option>Mataram</option>
                                                    <option>Pasuruan</option>
                                                    <option>Semarang</option>
                                                    <option>Sidoarjo</option>
                                                    <option>Solo & Madiun</option>
                                                    <option>Surabaya</option>
                                                    <option>Yogyakarta</option>";
                                            } else if ($detil->kota == "Jember") {
                                              echo "<option>Bali</option>
                                                    <option>Balikpapan</option>
                                                    <option>Bandung</option>
                                                    <option>Gresik & Tuban</option>
                                                    <option>Jakarta</option>
                                                    <option selected>Jember</option>
                                                    <option>Kediri</option>
                                                    <option>Malang</option>
                                                    <option>Mataram</option>
                                                    <option>Pasuruan</option>
                                                    <option>Semarang</option>
                                                    <option>Sidoarjo</option>
                                                    <option>Solo & Madiun</option>
                                                    <option>Surabaya</option>
                                                    <option>Yogyakarta</option>";
                                            } else if ($detil->kota == "Kediri") {
                                              echo "<option>Bali</option>
                                                    <option>Balikpapan</option>
                                                    <option>Bandung</option>
                                                    <option>Gresik & Tuban</option>
                                                    <option>Jakarta</option>
                                                    <option>Jember</option>
                                                    <option selected>Kediri</option>
                                                    <option>Malang</option>
                                                    <option>Mataram</option>
                                                    <option>Pasuruan</option>
                                                    <option>Semarang</option>
                                                    <option>Sidoarjo</option>
                                                    <option>Solo & Madiun</option>
                                                    <option>Surabaya</option>
                                                    <option>Yogyakarta</option>";
                                            } else if ($detil->kota == "Malang") {
                                              echo "<option>Bali</option>
                                                    <option>Balikpapan</option>
                                                    <option>Bandung</option>
                                                    <option>Gresik & Tuban</option>
                                                    <option>Jakarta</option>
                                                    <option>Jember</option>
                                                    <option>Kediri</option>
                                                    <option selected>Malang</option>
                                                    <option>Mataram</option>
                                                    <option>Pasuruan</option>
                                                    <option>Semarang</option>
                                                    <option>Sidoarjo</option>
                                                    <option>Solo & Madiun</option>
                                                    <option>Surabaya</option>
                                                    <option>Yogyakarta</option>";
                                            } else if ($detil->kota == "Mataram") {
                                              echo "<option>Bali</option>
                                                    <option>Balikpapan</option>
                                                    <option>Bandung</option>
                                                    <option>Gresik & Tuban</option>
                                                    <option>Jakarta</option>
                                                    <option>Jember</option>
                                                    <option>Kediri</option>
                                                    <option>Malang</option>
                                                    <option selected>Mataram</option>
                                                    <option>Pasuruan</option>
                                                    <option>Semarang</option>
                                                    <option>Sidoarjo</option>
                                                    <option>Solo & Madiun</option>
                                                    <option>Surabaya</option>
                                                    <option>Yogyakarta</option>";
                                            } else if ($detil->kota == "Pasuruan") {
                                              echo "<option>Bali</option>
                                                    <option>Balikpapan</option>
                                                    <option>Bandung</option>
                                                    <option>Gresik & Tuban</option>
                                                    <option>Jakarta</option>
                                                    <option>Jember</option>
                                                    <option>Kediri</option>
                                                    <option>Malang</option>
                                                    <option>Mataram</option>
                                                    <option selected>Pasuruan</option>
                                                    <option>Semarang</option>
                                                    <option>Sidoarjo</option>
                                                    <option>Solo & Madiun</option>
                                                    <option>Surabaya</option>
                                                    <option>Yogyakarta</option>";
                                            } else if ($detil->kota == "Semarang") {
                                              echo "<option>Bali</option>
                                                    <option>Balikpapan</option>
                                                    <option>Bandung</option>
                                                    <option>Gresik & Tuban</option>
                                                    <option>Jakarta</option>
                                                    <option>Jember</option>
                                                    <option>Kediri</option>
                                                    <option>Malang</option>
                                                    <option>Mataram</option>
                                                    <option>Pasuruan</option>
                                                    <option selected>Semarang</option>
                                                    <option>Sidoarjo</option>
                                                    <option>Solo & Madiun</option>
                                                    <option>Surabaya</option>
                                                    <option>Yogyakarta</option>";
                                            } else if ($detil->kota == "Sidoarjo") {
                                              echo "<option>Bali</option>
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
                                                    <option selected>Sidoarjo</option>
                                                    <option>Solo & Madiun</option>
                                                    <option>Surabaya</option>
                                                    <option>Yogyakarta</option>";
                                            } else if ($detil->kota == "Solo & Madiun") {
                                              echo "<option>Bali</option>
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
                                                    <option selected>Solo & Madiun</option>
                                                    <option>Surabaya</option>
                                                    <option>Yogyakarta</option>";
                                            } else if ($detil->kota == "Surabaya") {
                                              echo "<option>Bali</option>
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
                                                    <option selected>Surabaya</option>
                                                    <option>Yogyakarta</option>";
                                            } else if ($detil->kota == "Yogyakarta") {
                                              echo "<option>Bali</option>
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
                                                    <option selected>Yogyakarta</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Industri Prakerin</label>
                                    <input class="form-control" placeholder="Industri Prakerin" name="industri" required value="<?php echo $detil->industri; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Alamat Selama Prakerin</label>
                                    <textarea class="form-control" name="alamat" value=""><?php echo $detil->alamat_prakerin; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <input type="submit" name="insert" value="UPDATE" class="btn btn-primary btn-flat">
                                        </div>
                                        <div class="col-sm-4">
                                            <a href="<?php echo base_url(); ?>index.php/admin/datasiswa" class="btn btn-danger btn-flat">KEMBALI</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                          <img class="img-thumbnail" id="foto_siswa" src="<?php echo base_url();?>uploads/foto_siswa/<?php echo $detil->foto_siswa; ?>">
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
<style type="text/css">
  #foto_siswa {
    max-height: 300px; 
    max-width: 514px; 
    width: auto;
  }

  @media screen and (max-width: 700px) {
    #foto_siswa {
      max-width: 85%;
      height: auto;
    }
}
</style>