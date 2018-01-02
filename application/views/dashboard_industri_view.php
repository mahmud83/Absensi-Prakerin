<!DOCTYPE html>
<html>
    <body>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Absensi Prakerin SMK Telkom Malang 2017</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table width="100%" class="table table-bordered table-hover" id="dataTables-industriAbsen">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Siswa</th>
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
                                        <td>'.$data->nama_siswa.'</td>
                                        <td>'.$data->isi.'</td>
                                        <td><img style="height:125px; width:250px;" src="'.base_url().'uploads/foto_prakerin/'.$data->foto_kegiatan.'" onMouseOver="this.style.width=200px" ></td>
                                        <td>'.$data->tanggal.'</td>
                                        <td>';?>
                                            <?php 
                                                if ($data->status == 'Menunggu konfirmasi') {
                                                    echo '<p>'.$data->status.'<br></p>';
                                                    echo '<a href="'.base_url().'index.php/industri/updatestatus/'.$data->id_post.'" class="btn btn-primary btn-block">KONFIRMASI</a>';
                                                } else {
                                                    echo '<p>'.$data->status.'</p>';
                                                }
                                            ?>
                                            <?php echo '
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
    </body>
</html>

<!-- Anda belum absen hari ini!
<button class="btn btn-primary pull-right" style="padding-top: 1;">Absen Hari Ini</button> -->