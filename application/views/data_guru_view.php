<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Data Guru Pembimbing</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- Main content -->
    <section class="content">
        <?php 
            $notif = $this->session->flashdata('notif');
            if (!empty($notif)) {
                if ($notif == 'Berhasil mengubah data guru') {
                    echo '<div class="alert alert-success">';
                    echo $notif;
                    echo '</div>';
                } elseif ($notif == 'Berhasil menghapus data guru') {
                    echo '<div class="alert alert-success">';
                    echo $notif;
                    echo '</div>';
                } else {
                    echo '<div class="alert alert-danger">';
                    echo $notif;
                    echo '</div>';
                }
            }
        ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Guru Pembimbing Prakerin SMK Telkom Malang 2017</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr>
                    <th width="5%">No.</th>
                    <th>Nama Guru</th>
                    <th>No. Telp</th>
                    <th>Kota</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                        $no=1;
                        foreach($guru as $data) {
                            echo '
                                <tr>
                                    <td>'.$no.'</td>
                                    <td>'.$data->nama_guru.'</td>
                                    <td>'.$data->no_telp_guru.'</td>
                                    <td>'.$data->kota.'</td>
                                    <td style="width:9%;">
                                        <a href="'.base_url().'index.php/admin/editguru/'.$data->id_user_guru.'" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-edit"></i></a>
                                        <a href="'.base_url().'index.php/admin/deleteguru/'.$data->id_user_guru.'" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></a>
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