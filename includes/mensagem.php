<?php
//sessao
	session_start();
	if(isset($_SESSION['mensagem'])): 
?>
		

	<script>
		//mensagem que mostra quando foi cadastrado com sucesso ou nao. MATERIALISE
		window.onload = function (){
			M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
		};

	</script>

	
<?php		
	endif;
	
?>