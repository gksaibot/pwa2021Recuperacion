<?php $Titulo = "Imágenes con modales"; 
include_once("../estructura/cabecera.php"); ?>

<main class="container p-2 shadow-lg" id=cuerpo> <!-- Comienzo main cuerpo-->

<hr class="my-2">
<h4 class="text-center mb-4"><i class="fas fa-hand-pointer mx-2"></i>Click sobre cada imagen para ver detalles:</h4>
    
<div class="row d-flex align-items-center g-3"> <!-- Comienzo div galería -->
    <div class="col-xl-2 col-md-3 col-sm-4 zoom">
        <a class="imagen" id="1" href="#" data-bs-toggle="modal" data-bs-target="#abrirModal">
            <img src="../img/orulo2.jpg" class="img-fluid img-thumbnail rounded-3" alt="Orulo">
        </a>
        
        <h5 class="text-center">Disco Orulo</h5>
    </div>
    <div class="col-xl-2 col-md-3 col-sm-4 zoom">
        <a class="imagen" id="2" href="#" data-bs-toggle="modal" data-bs-target="#abrirModal">
            <img src="../img/2-skull4skull.jpg" class="img-fluid img-thumbnail rounded-3" alt="Skull4skull">
        </a>
        <h5 class="text-center">Disco Skull4skull</h5>
    </div>
    <div class="col-xl-2 col-md-3 col-sm-4 zoom">
        <a class="imagen" id="3" href="#" data-bs-toggle="modal" data-bs-target="#abrirModal">
            <img src="../img/boyinluv.jpg" class="img-fluid img-thumbnail rounded-3" alt="Boyinluv">
        </a>
        <h5 class="text-center">Disco Boyinluv</h5>
    </div>
    <div class="col-xl-2 col-md-3 col-sm-4 zoom">
        <a class="imagen" id="4" href="#" data-bs-toggle="modal" data-bs-target="#abrirModal">
            <img src="../img/butter.jpg" class="img-fluid img-thumbnail rounded-3" alt="Butter">
        </a>
        <h5 class="text-center">Disco butter</h5>
    </div>
    <div class="col-xl-2 col-md-3 col-sm-4 zoom">
        <a class="imagen" id="5" href="#" data-bs-toggle="modal" data-bs-target="#abrirModal">
            <img src="../img/darkandwild.jpg" class="img-fluid img-thumbnail rounded-3" alt="Darkandwild">
        </a>
        <h5 class="text-center">Disco Darkandwild</h5>
    </div>
    <div class="col-xl-2 col-md-3 col-sm-4 zoom">
        <a class="imagen" id="6" href="#" data-bs-toggle="modal" data-bs-target="#abrirModal">
            <img src="../img/dynamite.jpg" class="img-fluid img-thumbnail rounded-3" alt="Dynamite">
        </a>
        <h5 class="text-center">Disco Dynamite</h5>
    </div>
    <div class="col-xl-2 col-md-3 col-sm-4 zoom">
        <a class="imagen" id="7" href="#" data-bs-toggle="modal" data-bs-target="#abrirModal">
            <img src="../img/Map_of_de_soul.jpg" class="img-fluid img-thumbnail rounded-3" alt="Map of de soul">
        </a>
        <h5 class="text-center">Disco Map of the soul</h5>
    </div>
    <div class="col-xl-2 col-md-3 col-sm-4 zoom">
        <a class="imagen" id="8" href="#" data-bs-toggle="modal" data-bs-target="#abrirModal">
            <img src="../img/persona.jpg" class="img-fluid img-thumbnail rounded-3" alt="Persona">
        </a>
        <h5 class="text-center">Disco Persona</h5>
    </div>
    <div class="col-xl-2 col-md-3 col-sm-4 zoom">
        <a class="imagen" id="9" href="#" data-bs-toggle="modal" data-bs-target="#abrirModal">
            <img src="../img/tears.jpg" class="img-fluid img-thumbnail rounded-3" alt="Tears">
        </a>
        <h5 class="text-center">Disco Tears</h5>
    </div>
    <div class="col-xl-2 col-md-3 col-sm-4 zoom">
        <a class="imagen" id="10" href="#" data-bs-toggle="modal" data-bs-target="#abrirModal">
            <img src="../img/wings.jpg" class="img-fluid img-thumbnail rounded-3" alt="Wings">
        </a>
        <h5 class="text-center">Disco Wings</h5>
    </div>
    <div class="col-xl-2 col-md-3 col-sm-4 zoom">
        <a class="imagen" id="11" href="#" data-bs-toggle="modal" data-bs-target="#abrirModal">
            <img src="../img/young_forever.jpg" class="img-fluid img-thumbnail rounded-3" alt="Young Forever">
        </a>
        <h5 class="text-center">Disco YoungForever</h5>
    </div>
    <div class="col-xl-2 col-md-3 col-sm-4 zoom">
        <a class="imagen" id="12" href="#" data-bs-toggle="modal" data-bs-target="#abrirModal">
            <img src="../img/fakelove.jpg" class="img-fluid img-thumbnail rounded-3" alt="Fake Love">
        </a>
        <h5 class="text-center">Disco fakelove</h5>
    </div>
    
    <div class="modal fade" id="abrirModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> <!-- Modal relleno con AJAX-->
        <div class="modal-dialog">
            <div class="modal-content"> <!-- Contenido rellenado con ej3Ajax.js -->
                <div class="modal-header">
                    <h4 class="modal-title" id="nombreModal">Disco Orulo</h4><br>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="imagenMod" src="../img/orulo2.jpg" class="imagenModal img-fluid img-thumbnail rounded-3 mb-3" alt="Orulo"><br>
                    <strong><span class=fw-bold>Año de publicacion: </span></strong><span id="direccionModal"></span><br>
                    <strong><span class=fw-bold>Desempeño comercial: </span></strong><span id="telefonoModal"></span><br>
                    <strong><span class=fw-bold>Formato: </span></strong><span id="emailModal"></span><br>
                    <strong><span class=fw-bold>Sitio web oficial: </span><span id="webModal">/</span><br>
                </div>
                <div class="modal-footer">
                    
                </div>
            </div>
        </div>
    </div> <!-- Fin div Modal -->
    
</div> <!-- Fin div galería -->

<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>-->
<?php include_once("../estructura/pie.php"); ?>
<script src="../js/eje3ajax.js"></script>
</main> <!-- Fin main cuerpo -->