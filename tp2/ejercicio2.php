<?php $Titulo = "Ej1: Selects dependientes"; 
include_once("../estructura/cabecera.php"); ?>
  <body>
    <h1 class="text-center">Ejercicio 2</h1>
        <div class="container">
            <div class="row">
            <nav id=resumen> <!-- Comienzo tabs -->
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-seccion1-tab" data-bs-toggle="tab" data-bs-target="#nav-seccion1" type="button" role="tab" aria-controls="nav-seccion1" aria-selected="true">
            <span class=fw-bold>Efemerides Musicales</span>
        </button>
        <button class="nav-link" id="nav-seccion2-tab" data-bs-toggle="tab" data-bs-target="#nav-seccion2" type="button" role="tab" aria-controls="nav-seccion2" aria-selected="false">
            <span class=fw-bold>Noticias de la Musica</span>
        </button>
        <button class="nav-link" id="nav-seccion3-tab" data-bs-toggle="tab" data-bs-target="#nav-seccion3" type="button" role="tab" aria-controls="nav-seccion3" aria-selected="false">
            <span class=fw-bold>Columnas musicales</span>
        </button>
    </div>
<div class="tab-content bg-light p-2" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-seccion1" role="tabpanel" aria-labelledby="nav-seccion1-tab">
        <!-- Contenido dinámico por AJAX -->
    </div> <!-- Fin div nav-seccion1 -->
    <div class="tab-pane fade" id="nav-seccion2" role="tabpanel" aria-labelledby="nav-seccion2-tab">
        <!-- Contenido dinámico por AJAX -->
    </div> <!-- Fin div nav-seccion2 -->
    <div class="tab-pane fade" id="nav-seccion3" role="tabpanel" aria-labelledby="nav-seccion3-tab">
        <!-- Contenido dinámico por AJAX -->
    </div> <!-- Fin div nav-seccion3 -->
    
</div> <!-- Fin tabs -->
            </div>
        </div>
    
    
        

<?php include_once("../estructura/pie.php"); ?>
   
    </body>
</html>