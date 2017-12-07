<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Data Siswa</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Siswa Prakerin SMK Telkom Malang 2017</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Jenis Kelamin</th>
                    <th>No. Telp</th>
                    <th>Industri Prakerin</th>
                    <th>Kota</th>
                    <th>Alamat Selama Prakerin</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                        $no=1;
                        foreach($siswa as $data) {
                            echo '
                                <tr>
                                    <td>'.$no.'</td>
                                    <td>'.$data->nama_siswa.'</td>
                                    <td>'.$data->kelas.'</td>
                                    <td>'.$data->jenis_kelamin.'</td>
                                    <td>'.$data->no_telp_siswa.'</td>
                                    <td>'.$data->industri.'</td>
                                    <td>'.$data->kota.'</td>
                                    <td>'.$data->alamat_prakerin.'</td>
                                    <td style="width:9%;">
                                        <a href="'.base_url().'index.php/admin/editsiswa/'.$data->id_user_siswa.'" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-edit"></i></a>
                                        <a href="'.base_url().'index.php/obat/deletesiswa/'.$data->id_user_siswa.'" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></a>
                                    </td>
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