<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Data Guru</h1>
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
                            <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/admin/updateguru/<?php echo $this->uri->segment(3); ?>">
                                <div class="form-group">
                                    <label>Nama Guru</label>
                                    <input class="form-control" placeholder="Nama Guru" name="nama_guru" required value="<?php echo $detil->nama_guru; ?>">
                                </div>
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <input class="form-control" placeholder="No. Telepon" name="telp" type="number" required value="<?php echo $detil->no_telp_guru; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Kota</label>
                                    <select class="form-control select2" name="kota">
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
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <input type="submit" name="insert" value="UPDATE" class="btn btn-primary btn-flat">
                                        </div>
                                        <div class="col-sm-4">
                                            <a href="<?php echo base_url(); ?>index.php/admin/dataguru" class="btn btn-danger btn-flat">KEMBALI</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                          <div class="col-lg-3">
                            <div class="container">
                              <img id="foto_guru" src="<?php echo base_url();?>uploads/foto_guru/<?php echo $detil->foto_guru; ?>" alt="Avatar" class="anu img-thumbnail">
                              <div class="middle">
                                <form id="formfoto" action="<?php echo base_url(); ?>index.php/admin/updatefotoguru/<?php echo $id_gr = $this->uri->segment(3); ?>" method="post" enctype="multipart/form-data">
                                  <div class="custom" id="input">
                                    <label id="labelnya" style="background-color: rgba(0,0,0,.3); color: white; padding: 5px;">
                                      EDIT PHOTO
                                      <input type="file" id="foto" name="foto" accept="image/*" class="change-avatar changephoto" onchange="this.form.submit()">
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </div>
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
<style type="text/css">
  #foto_guru {
    max-height: 250px; 
    max-width: 464px; 
    width: auto;
  }

  @media screen and (max-width: 700px) {
    #foto_guru {
      max-width: 85%;
      height: auto;
      display: block;
      margin: auto;
    }
  }

  .changephoto{
      z-index: 999;
      line-height: 0;
      font-size: 0;
      position: absolute;
      opacity: 0;
      filter: alpha(opacity = 0);-ms-filter: "alpha(opacity=0)";
      margin: 0;
      padding:0;
      left:0;
  }

  .custom-input-file:hover .uploadPhoto { display: block; }

  .container {
    position: relative;
    max-height: 300px; 
    max-width: 514px; 
    width: auto;
  }

  .anu {
    opacity: 1;
    display: block;
    width: 100%;
    height: auto;
    transition: .5s ease;
    backface-visibility: hidden;
    margin: auto;
    display: block;
  }

  .middle {
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
  }

  .container:hover .anu {
    opacity: 0.3;
  }

  .container:hover .middle {
    opacity: 1;
  }

  #labelnya {
    cursor: pointer;
  }

</style>