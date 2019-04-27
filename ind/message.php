<?php
//sesao
session_start();
if(isset($_SESSION['mensagem'])): 
	if($_SESSION['mensagem'] !=""):?>
		<script>
			window.onload = function(){
				M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
			};
		</script>
		<?php
		$_SESSION['mensagem'] = "";
	endif;
endif;
?>