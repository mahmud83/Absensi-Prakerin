<!DOCTYPE html>
<html>
	<body>
    	<?php if($isAbsen == true): ?>
    	<div class="alert alert-danger">
    		<table>
    			<tr>
    				<td style="width: 100%">Anda belum absen hari ini!</td>
    				<td style="width: 25%">
    					<button type="button" data-toggle="modal" data-target="#absenModal"  class="btn btn-primary pull-right">Absen Hari Ini</button>

    				</td>
    			</tr>
    		</table>
    	</div>
    	<?php else: ?>
    		<div class="alert alert-success">Terima kasih, Anda sudah absen hari ini</div>
    	<?php endif; ?>
    	<!-- The Modal -->
			<div class="modal fade" id="absenModal">
  				<div class="modal-dialog">
    				<div class="modal-content">

      					<!-- Modal Header -->
      					<div class="modal-header">
        					<h3 class="modal-title">Tanggal <?php echo date("d M Y"); ?>
        						<button type="button" class="close" data-dismiss="modal">&times;</button>
        					</h3>
      					</div>

      					<!-- Modal body -->
      					<div class="modal-body">
        					<form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/siswa/insertjurnal">
                                <div class="form-group">
                                    <label>Kegiatan Prakerin</label>
                                    <textarea class="form-control" name="keterangan" autofocus></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Foto Prakerin (<span class="small">Max. size 10 MB</span>)</label>
                                    <input type="file" id="foto" name="foto" required>
                                </div>
                                <div class="modal-footer">
                                    	<div class="row">
                                            <input type="submit" name="insert" value="TAMBAH" class="btn btn-primary btn-flat pull-left">
                                        	<div>
                                            	<a href="<?php echo base_url(); ?>index.php/admin" class="btn btn-danger btn-flat" data-dismiss="modal">KEMBALI</a>
                                        	</div>
                                    </div>
                                </div>
                            </form>
      					</div>
    				</div>
  				</div>
			</div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Absensi Prakerin SMK Telkom Malang 2017</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                                        <td id="anu"><img style="height:125px; width:250px;" src="'.base_url().'uploads/foto_prakerin/'.$data->foto_kegiatan.'" id="kegiatan"></td>
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
	</body>
</html>