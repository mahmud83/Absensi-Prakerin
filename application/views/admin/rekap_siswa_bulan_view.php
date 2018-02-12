<div id="content-wrapper">
    <section class="content-header">
      <h1 style="padding-bottom: 7px;">
        <span>Rekap Data Absen Siswa</span>
      </h1>
      <div class="row">
        <div class="col-lg-1 col-md-3 col-sm-12">
          <button class="btn btn-danger btn-flat" onclick="history.back(-1)"><i class="fa fa-angle-double-left" style="padding-right: 5px;"></i>Kembali</button>
        </div>
        <div class="col-lg-4 pull-right">
          <div class="row">
            <form role="form" method="post" action="<?php echo base_url(); ?>admin/rekap_siswa_bulan">
              <div class="col-lg-9 col-md-3 col-sm-12">
                <select name="bulan" class="form-control">
                  <option>-- Pilih Bulan untuk Melihat Report --</option>
                  <option value="01">Januari</option>
                  <option value="02">Februari</option>
                  <option value="03">Maret</option>
                  <option value="04">April</option>
                  <option value="05">Mei</option>
                  <option value="06">Juni</option>
                  <option value="07">Juli</option>
                  <option value="08">Agustus</option>
                  <option value="09">September</option>
                  <option value="10">Oktober</option>
                  <option value="11">November</option>
                  <option value="12">Desember</option>
                </select>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12">
                <input type="submit" name="submit" class="btn btn-primary btn-block btn-flat pull-right" value="Lihat">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="row">
                <div class="col-lg-6">
                  <h3 class="box-title" style="margin-bottom: 15px;">Daftar Ketidakhadiran Siswa</h3>
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
                <div id="chartperbulan" class="col-lg-6 col-sm-12">
                  <script type="text/javascript">
                    // Build the chart
                    Highcharts.chart('chartperbulan', {
                        chart: {
                            plotBackgroundColor: null,
                            plotBorderWidth: null,
                            plotShadow: false,
                            type: 'column'
                        },
                        title: {
                            text: 'Keterangan Kehadiran Siswa'
                        },
                        xAxis: {
                          categories: ['Masuk', 'Izin', 'Sakit']
                        },
                        series: [{
                          name: "Jumlah Siswa",
                          data: [<?php echo $siswaMasukBulannya; ?>, <?php echo $siswaIzinBulannya; ?>, <?php echo $siswaSakitBulannya; ?>]
                        }],
                    });
                  </script>
              </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-lg-6 col-sm-12">
                
                <div class="row">
                  
                </div>
              </div>
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