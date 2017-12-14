<!DOCTYPE html>
<html>
	<body>
		<?php 
        	$notif = $this->session->flashdata('notif');
        	if (!empty($notif)) {
            	echo '<div class="alert alert-danger">';
            	echo $notif;
            	echo '</div>';
        	}
    	?>
	</body>
</html>