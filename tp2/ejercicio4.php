<?php $Titulo = "Ej4: Formulario con validaciones"; 
include_once("../estructura/cabecera.php"); ?>

<main class="container p-2 shadow-lg" id=cuerpo> <!-- Comienzo main cuerpo-->

<hr class="my-2">

<div class="container p-2" id=formulario> <!-- Comienzo div formulario -->
<h4 class="text-center mb-4"><i class="fas fa-edit mx-2"></i>Completa la siguiente información:</h4>
<form name=formContacto id="formContacto" method=post action="./TP2ej4resultado.php" autocomplete=off data-toggle="validator" role="form" class="needs-validated" novalidate> <!-- Corre validaciones.js -->
		<div class="row row-cols-2 g-3">
			<div class="col form-floating form-group mb-4"> <!-- bootstrapValidator usa form-group para identificar input y label -->
				<input onblur="validarusuario(this);" type=text class="form-control invalid" name=usuario id=usuario placeholder="Tu usuario">
				<label for=usuario class=fw-bold><i class="fas fa-user mx-2"></i>Usuario</label>
				<span id="comprobarusuario"></span><br>
			</div>
			<div class="col form-floating form-group mb-4">
                <input type=password class=form-control name=password id=password placeholder="Tu Password">
				<label for=password class=fw-bold><i class="fas fa-hotel mx-2"></i>Password</label>
			</div>
		</div>
        
		<div class="row row-cols-2 g-3">
			<div class="col form-floating form-group mb-4">
				<input type=text class="form-control was-validated" name="email" id="email" placeholder="ejemplo@turismoelbolson.gob.ar">
					<label for=email class=fw-bold><i class="fas fa-at mx-2"></i>Email</label>
					<div class="invalid-feedback"></div>
			</div>
			
			<div class="col form-floating form-group mb-4"> <!-- bootstrapValidator usa form-group para identificar input y label -->
				<input type=text class="form-control invalid" name=nombre id=nombre placeholder="Tu nombre">
				<label for=nombre class=fw-bold><i class="fas fa-user mx-2"></i>Nombre y apellido</label>
			</div>
		</div>
        
		<div class="row row-cols-2 g-3">
			<div class="col form-floating form-group mb-4">
                <input type=text class=form-control name=nombreLugar id=nombreLugar placeholder="Tu Empresa">
				<label for=nombreLugar class=fw-bold><i class="fas fa-hotel mx-2"></i>Empresa</label>
			</div>
		
			<div class="col form-floating form-group mb-4">
                <input type=text class=form-control name=telefono id=telefono placeholder="(0294)455666">
				<label for=telefono class=fw-bold><i class="fas fa-phone mx-2"></i>Teléfono</label>
			</div>
			
		</div>
		<div class="row">
			<div class="form-floating form-group col-md-12 mb-4">
				<textarea class=form-control name=comentarios id=comentarios placeholder="Escriba sus comentarios..."></textarea>
				<label for=comentarios class=fw-bold><i class="fas fa-pen mx-2"></i>Escriba sus comentarios (opcional)</label>
			</div>
		</div>
		<div class="d-flex justify-content-end">
		    <input type=submit value="Enviar" class="btn btn-info">
		</div>
	</form>
</div> <!-- Fin div formulario -->

</main> <!-- Fin main cuerpo -->
<?php include_once("../estructura/pie.php"); ?>
<script src="../js/bootstrapValidator.js"></script>
<script src="../js/confirmarSalir.js"></script>
<script src="../js/validaciones.js"></script>
<script src="../js/prototype.js" type="text/javascript"></script>
<script>
	function validarusuario(usuario){
		var url= 'php/validarusuario.php';
		var parametros= 'usuario='+usuario.value;
		var ajax= new Ajax.Updater('comprobarusuario',url,{method: 'get', parameters: parametros});
		
	}
</script>


