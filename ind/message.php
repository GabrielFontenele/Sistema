<?php
//sesao
session_start();
if(isset($_SESSION['mensagem'])): 
	if($_SESSION['mensagem'] !=""):?>
		<div class="alert alert-warning alert-dismissible">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong><?php echo $_SESSION['mensagem']; ?></strong> 
		</div>
		
		<?php
		$_SESSION['mensagem'] = "";
	endif;
endif;
?>