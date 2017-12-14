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
                            <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/admin/updateguru/<?php echo $id_gr = $this->uri->segment(3); ?>">
                                <!-- <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" placeholder="Username" name="username" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" placeholder="Password" name="password" required>
                                </div> -->
                                <div class="form-group">
                                    <label>Nama Guru</label>
                                    <input class="form-control" placeholder="Nama Guru" name="nama_guru" required value="<?php echo $detil->nama_guru; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" id="foto" name="foto" required>
                                </div>
                                <div class="form-group">
                                    <label>No. Telepon</label>
                                    <input class="form-control" placeholder="No. Telepon" name="telp" type="number" required value="<?php echo $detil->no_telp_guru; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Kota</label>
                                    <select class="form-control" name="kota">
                                        <?php 
                                            if($detil->kota == "Malang")
                                            {
                                                echo "<option selected>Malang</option>
                                                      <option>Surabaya</option>
                                                      <option>Bandung</option>
                                                      <option>Jakarta</option>";
                                            } else if($detil->kota == "Surabaya")
                                            {
                                                echo "<option>Malang</option>
                                                      <option selected>Surabaya</option>
                                                      <option>Bandung</option>
                                                      <option>Jakarta</option>";
                                            } else if($detil->kota == "Bandung")
                                            {
                                                echo "<option>Malang</option>
                                                      <option>Surabaya</option>
                                                      <option selected>Bandung</option>
                                                      <option>Jakarta</option>";
                                            } else if($detil->kota == "Jakarta")
                                            {
                                                echo "<option>Malang</option>
                                                      <option>Surabaya</option>
                                                      <option>Bandung</option>
                                                      <option selected>Jakarta</option>";
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
                          <img style="height:200px; width:150px;" src="<?php echo base_url();?>uploads/foto_guru/<?php echo $detil->foto_guru; ?>">
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