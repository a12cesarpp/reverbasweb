<?php 
	// Inicializamos las sesiones.
	@session_start();	
	//require '../lib/constantes.php';
	//require '../lib/funciones.php';
?>
<!DOCTYPE html>
<html lang="en">
	<?php require_once 'inc/head.php'; ?>
	<body>
		<?php require_once 'inc/cabecera.php';?>
        <div class="clearB"></div>
        <?php require_once 'inc/index.php';?>
        <div class="clearB"></div>
        <?php  require_once 'inc/app.php';?>
        <?php require_once 'inc/colaboradores.php';?>
	</body>
</html>