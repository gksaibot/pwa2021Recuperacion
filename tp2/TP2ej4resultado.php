<?php $Titulo = "Ej4: Resultado del Formulario"; 
include_once("../estructura/cabecera.php"); ?>

<main class="container p-2 shadow-lg" id=cuerpo> <!-- Comienzo main cuerpo-->

<hr class="my-2">

<div class="container p-2" id=resultado> <!-- Comienzo div resultado -->
	<h4 class="text-center mb-4"><i class="fas fa-comment-dots mx-2"></i>Resultado:</h4>
    <?php echo 'Gracias '.$_POST['name'].' - '.$_POST['email'].'. La consulta ha sido recibida correctamente!';
     //codigo para enviar el email...
    ?>
    <hr>
    <a href="ejercicio4.php" class="btn btn-outline-dark"> <i class="fas fa-arrow-left mx-2"></i>Volver a la página anterior</a>
</div> <!-- Fin div resultado-->

</main> <!-- Fin main cuerpo -->

<?php include_once("../estructura/pie.php"); ?>