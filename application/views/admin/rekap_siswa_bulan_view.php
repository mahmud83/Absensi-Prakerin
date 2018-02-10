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
              <div class="row">
                <div class="col-lg-6">
                  <h3 class="box-title">Pilih Bulan untuk Melihat Grafik</h3>
                </div>
                <div class="col-lg-6">
                  <h3 class="box-title">Rekap Absen Siswa <?php echo date("M Y") ?></h3>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-lg-6">
                <div class="row">
                  <form role="form" method="post" action="<?php echo base_url(); ?>admin/rekap_siswa_bulan">
                   <div class="col-lg-9">
                    <select name="bulan" class="form-control">
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
                  <div class="col-lg-3">
                    <button class="btn btn-primary btn-flat btn-block" type="submit" name="submit">Lihat</button>
                  </div> 
                  </form>
                </div>
                <div class="row">
                  <div id="chartperhari" class="col-lg-12">
                    <script type="text/javascript">
                      // Build the chart
                      Highcharts.chart('chartperhari', {
                          chart: {
                              plotBackgroundColor: null,
                              plotBorderWidth: null,
                              plotShadow: false,
                              type: 'column'
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
              <div id="chartperbulan" class="col-lg-6">
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
                            text: 'Keterangan Kehadiran Siswa (<?php echo date("M Y") ?>)'
                        },
                        xAxis: {
                          categories: ['Masuk', 'Izin', 'Sakit']
                        },
                        series: [{
                          name: "Jumlah Siswa",
                          data: [<?php echo $countSiswaMasukPerbulan; ?>, <?php echo $countSiswaIzinPerbulan; ?>, <?php echo $countSiswaSakitPerbulan; ?>]
                        }],
                    });
                  </script>
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