<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Data Kegiatan Prakerin</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Kegiatan Prakerin <b><?php echo $nama; ?></b></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-absSiswa">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kegiatan Prakerin</th>
                        <th>Foto Prakerin</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no=1;
                            foreach($jurnal as $data) {
                                echo '
                                    <tr>
                                        <td>'.$no.'</td>
                                        <td>'.$data->isi.'</td>
                                        <td><img style="height:125px; width:250px;" src="'.base_url().'uploads/foto_prakerin/'.$data->foto_kegiatan.'"></td>
                                        <td>'.$data->tanggal.'</td>
                                        <td>'.$data->status.'</td>
                                    </tr>
                                ';
                                $no++;
                            };
                        ?>
                    </tbody>
                        <!-- <td><img style="height:160px; width:120px;" src="'.base_url().'uploads/foto_siswa/'.$data->foto_siswa.'"></td> -->
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
        <!-- /.col -->
        </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>