<?php 
include_once("../estructura/cabecera.php"); ?>
    <link href="../js/jquery-ui/jquery-ui.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <div class="row">
          <hl>
            <label for="color">Estado/Provincia: </label>
            <input type="text" id="estado">
        </div>
    </div>  

    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript">
  $(document).ready(function() {

    $('#estado').autocomplete({
      source: function(request, response){
        $.ajax({
          url:"php/estadosEje6.php",
          dataType:"json",
          data:{q:request.term},
          success: function(data){
            response(data);
          }

        });
      },
      minLength: 1,
      select: function(event,ui){
        alert("Selecciono: "+ ui.item.label);
      }
          
    
    });

  });
    </script>
    </body>
</html>