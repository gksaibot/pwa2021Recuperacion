$(function(){ 
    let datos;
    $.ajax({
        type: "Get",
        url: "ej3.json",
        dataType: "json",
        success: function (data){
            datos = data;
        },
        error: function (){
            alert("Json no encontrado");
        }
    }) 
    $(document).on("click", ".imagen" ,function(){
          var id =$(this).attr("id");
          let i;
          for (i=0; i<=12; i++){
                if (datos[i].Id_Disco == id ){
                        let resultado = datos[i];
                        $("#nombreModal").text(resultado.Disco);
                        $("#imagenMod").attr("src",resultado.imagen);
                        $("#direccionModal").text(resultado.Año_de_Publicacion);
                        $("#emailModal").text(resultado.Formato);
                        $("#telefonoModal").text(resultado.Desempeño_comercial);
                        $("#webModal").text(resultado.Sitio_Web);
                        $('.modal-footer').html(`<a href="${resultado.Sitio_Web}" id="linkModal" class="btn btn-outline-info">Sitio web »</a>`);
                }  
                
          }
           
    });
});    
        
        