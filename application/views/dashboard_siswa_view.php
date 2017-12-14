<!DOCTYPE html>
<html>
	<body>
    	<?php if($isAbsen == true): ?>
    	<div class="alert alert-danger">
    		<table>
    			<tr>
    				<td style="width: 100%">Anda belum absen hari ini!</td>
    				<td style="width: 25%">
    					<button type="button" data-toggle="modal" data-target="#myModal"  class="btn btn-primary pull-right">Absen Hari Ini</button>
    				</td>
    			</tr>
    		</table>
    	</div>
    	<?php else: ?>
    		<div class="alert alert-success">Terima kasih, Anda sudah absen hari ini</div>
    	<?php endif; ?>
    	<!-- The Modal -->
			<div class="modal fade" id="myModal">
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
        					<form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/admin/insertguru">
                                <div class="form-group">
                                    <label>Kegiatan Prakerin</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Foto Prakerin</label>
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
	</body>
</html>

<!-- Anda belum absen hari ini!
<button class="btn btn-primary pull-right" style="padding-top: 1;">Absen Hari Ini</button> -->