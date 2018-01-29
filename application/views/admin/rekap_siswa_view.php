<div id="content-wrapper">
    <section class="content-header">
      <h1 style="padding-bottom: 7px;">
        <span>Rekap Data Absen Siswa</span>
      </h1>
      <button class="btn btn-danger btn-flat" onclick="history.back(-1)"><i class="fa fa-angle-double-left" style="padding-right: 5px;"></i>Kembali</button>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Rekap Absen Siswa <?php echo date("M Y") ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table style="width: 100%; table-layout: auto;" class="table table-bordered table-hover" id="dataTables-rekap">
                <thead>
                <tr>
                    <th width="5%">No.</th>
                    <th>Nama Siswa</th>
                    <th>Industri</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                    <th>Alasan</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                        $no=1;
                        foreach($absen as $data) {
                            $oldDate = $data->tanggal;
                            $newDate = date("d M Y", strtotime($oldDate));
                            echo '
                                <tr>
                                    <td>'.$no.'</td>
                                    <td>'.$data->nama_siswa.'</td>
                                    <td>'.$data->industri.'</td>
                                    <td>'.$newDate.'</td>
                                    <td>'.$data->ket_abs.'</td>
                                    <td>'.$data->isi.'</td>
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