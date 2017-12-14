<!DOCTYPE html>
<html>
	<body>
    	<?php if($isAbsen == true): ?>
    	<div class="alert alert-danger">
    		<table>
    			<tr>
    				<td style="width: 100%">Anda belum absen hari ini!</td>
    				<td style="width: 25%">
    					<button class="btn btn-primary pull-right" style="float: right;">Absen Hari Ini</button>
    				</td>
    			</tr>
    		</table>
    	</div>
    	<?php else: ?>
    		<div class="alert alert-success">Terima kasih, Anda sudah absen hari ini</div>
    	<?php endif; ?>
	</body>
</html>

<!-- Anda belum absen hari ini!
<button class="btn btn-primary pull-right" style="padding-top: 1;">Absen Hari Ini</button> -->