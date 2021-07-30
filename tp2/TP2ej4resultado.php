<?php $Titulo = "Ej4: Resultado del Formulario"; 
include_once("../estructura/cabecera.php"); 
include_once("../utiles/funciones.php");
require_once 'php/conexionEje4.php';

  $usuario=$_REQUEST['usuario'];
  $password=$_REQUEST['password'];
  $email=$_REQUEST['email'];
  $nombre=$_REQUEST['nombre'];
  $nombreLugar=$_REQUEST['nombreLugar'];
  $telefono=$_REQUEST['telefono'];
  $comentarios=$_REQUEST['comentarios'];

  $mysqli = getConn();
  $query = "INSERT INTO `usuarios` (`IdUsuario`, `Usuario`, `Clave`, `Nombre`, `Apellido`) 
  VALUES (5, '$usuario','$password','$nombre','$nombre')";
  $query2="INSERT INTO `contactos`(`IdContacto`, `Nombre`, `Empresa`, `Telefono`, `Mail`, `Comentario`) 
  VALUES (4,'$nombre','$nombreLugar','$telefono','$email','$comentarios')";
  $db= $mysqli->query($query);
  $db= $mysqli->query($query2);
?>

<main class="container p-2 shadow-lg" id=cuerpo> <!-- Comienzo main cuerpo-->

<hr class="my-2">

<div class="container p-2" id=resultado> <!-- Comienzo div resultado -->
	<h4 class="text-center mb-4"><i class="fas fa-comment-dots mx-2"></i>Resultado:</h4>
    <?php
    if ( empty( data_submitted() ) )  {
        // Muestra error si no hay datos recibidos:
	?>
        <div class='alert alert-danger' role='alert'><i class='fas fa-times-circle mx-2'></i>No se recibieron datos.</div>
	<?php } else {
        echo "<div class='alert alert-success' role='alert'><i class='fas fa-check-circle mx-2'></i>La información fue enviada con éxito.</div>";
        echo "<div class='alert alert-info alert-dismissible fade show my-4 text-break' role='alert'>".json_encode(data_submitted())."</div>";
    }
    ?>
    <hr>
    <a href="ejercicio4.php" class="btn btn-outline-dark"> <i class="fas fa-arrow-left mx-2"></i>Volver a la página anterior</a>
</div> <!-- Fin div resultado-->

</main> <!-- Fin main cuerpo -->

<?php include_once("../estructura/pie.php"); ?>