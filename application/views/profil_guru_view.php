<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Profil Guru</h1>
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
                            <form role="form" method="post" enctype="multipart/form-data" action="#">
                                <div class="form-group">
                                  <label>Nama Guru</label>
                                  <input disabled class="form-control" placeholder="Nama Guru" name="nama_guru" required value="<?php echo $nama; ?>">
                                </div>
                                <div class="form-group">
                                  <label>No. Telp. Guru</label>
                                  <input disabled class="form-control" placeholder="Nama Guru" name="nama_guru" required value="<?php echo $no; ?>">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                          <img id="foto_guru" class="img-thumbnail" src="<?php echo base_url(); ?>uploads/foto_guru/<?php echo $foto_guru; ?>">
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
    max-height: 200px; 
    max-width: 314px; 
    width: auto;
  }

  @media screen and (max-width: 700px) {
    #foto_guru {
      max-width: 85%;
      height: auto;
    }
}
</style>