<?php $Titulo = "Ej5: Tabla paginada";
include_once("../estructura/cabecera.php"); ?>

<script src="../jquery/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(cargarproductos(0));
    function cargarproductos(limite){
        var url="php/cargarproductos.php";
        $.post(url, {limite: limite}, function (responseText){
            $("#productos").html(responseText);
        });
    }
</script>
<body>
    <section id="productos">
        
    </section>

    <?php include_once("../estructura/pie.php"); ?>

</body>
</html>