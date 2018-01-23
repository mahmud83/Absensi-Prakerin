<div id="content-wrapper">
    <section class="content-header">
      <h1 style="padding-bottom: 7px;">
        <span>Data Siswa</span>
      </h1>
    </section>
    <!-- Report content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title" style="font-size: 25px;">Rekap Data Siswa</h3>
                    <h5>
                        <b><i><?php echo date('l'); ?>, 
                            <?php
                                $newDate = date("d M Y", strtotime(date("d M Y")));
                                echo $newDate; 
                            ?> 
                        </i></b>
                    </h5>
                </div>
                <div class="box-body">
                    <?php $belumAbsen = $countJumlahS - $countSudahAbsen; ?>
                    <p><b>Jumlah siswa yang sudah melakukan absen hari ini : </b><?php echo $countSudahAbsen; ?></p>
                    <p><b>Jumlah siswa yang belum melakukan absen hari ini : </b><?php echo $belumAbsen; ?></p>
                    <div id="chart" class="col-lg-6">
                        <script type="text/javascript">

                         // Build the chart
                        Highcharts.chart('chart', {
                            chart: {
                                plotBackgroundColor: null,
                                plotBorderWidth: null,
                                plotShadow: false,
                                type: 'pie'
                            },
                            title: {
                                text: 'Siswa sudah melakukan absen'
                            },
                            tooltip: {
                                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                            },
                            plotOptions: {
                                pie: {
                                    allowPointSelect: true,
                                    cursor: 'pointer',
                                    dataLabels: {
                                        enabled: false
                                    },
                                    showInLegend: true
                                }
                            },
                            series: [{
                                name: 'Persentase',
                                colorByPoint: true,
                                data: [{
                                    name: 'Belum absen',
                                    y: <?php echo $belumAbsen; ?>
                                }, {
                                    name: 'Sudah Absen',
                                    y: <?php echo $countSudahAbsen; ?>,
                                    sliced: true,
                                    selected: true
                                }]
                            }]
                        });
                        </script>
                    </div>
                    <div id="chart2" class="col-lg-6">
                    <script type="text/javascript">
                        // Build the chart
                        Highcharts.chart('chart2', {
                            chart: {
                                plotBackgroundColor: null,
                                plotBorderWidth: null,
                                plotShadow: false,
                                type: 'pie'
                            },
                            title: {
                                text: 'Siswa sudah melakukan absen'
                            },
                            tooltip: {
                                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                            },
                            plotOptions: {
                                pie: {
                                    allowPointSelect: true,
                                    cursor: 'pointer',
                                    dataLabels: {
                                        enabled: false
                                    },
                                    showInLegend: true
                                }
                            },
                            series: [{
                                name: 'Persentase',
                                colorByPoint: true,
                                data: [{
                                    name: 'Sudah dikonfirmasi',
                                    y: <?php echo $countTerconfirm; ?>
                                }, {
                                    name: 'Belum dikonfirmasi',
                                    y: <?php echo $countBelumTerconfirm; ?>,
                                    sliced: true,
                                    selected: true
                                }]
                            }]
                        });
                    </script>
                </div>
                </div>
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
              <h3 class="box-title">Data Siswa Prakerin SMK Telkom Malang 2018 Kota <?php echo $kota; ?></h3>
              <p><i>Jumlah siswa :</b> <?php echo $countJumlahS; ?></i></p>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table style="width: auto; table-layout: auto; " class="table table-bordered table-hover" id="dataTables-dasGuru">
                <thead>
                <tr>
                    <th width="5%">No.</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Jenis Kelamin</th>
                    <th>No. Telp</th>
                    <th>Industri Prakerin</th>
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
                                    <td>'.$data->alamat_prakerin.'</td>
                                    <td style="width:9%;">
                                        <a href="'.base_url().'guru/profilsiswa/'.$data->id_user.'" class="btn btn-info btn-sm" title="Lihat Profil Siswa"><i class="fa fa-user"></i></a>
                                        <a href="'.base_url().'guru/datajurnal/'.$data->id_user.'" class="btn btn-warning btn-sm" title="Lihat Jurnal Siswa"><i class="fa fa-file-text-o"></i></a>
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