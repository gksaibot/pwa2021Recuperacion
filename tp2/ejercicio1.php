<?php $Titulo = "Selects dependientes"; 
include_once("../estructura/cabecera.php"); ?>
<body>
  <div class="container">
    <div class="page-header text-left">
      <h3>Select dinámicos</h3>
    </div>
    <div class="alert alert-info" role="alert">Ejemplo de 2 selects</div>
    <p>Elige un Pais según la lista:</p>
    <div class="row">
      <div class="col-md-4">
          <p>Lista de Paises
          <select id="lista_reproduccion" name="lista_reproduccion" class="form-control">
          </select>
        </p>
      </div>
      <div class="col-md-4">
        <p>Provincias
        <select id="videos" name="video" class="form-control">
        </select>
      </p>
      </div>
      
    </div>
    
  </div>
<?php include_once("../estructura/pie.php"); ?>  </body>
</html>
  