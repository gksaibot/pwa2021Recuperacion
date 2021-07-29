$(document).ready(function(){
    $("#contact-form").validate({
        event: "blur",rules: {'name': "required",'empresa': "required",'telefono': "required",'email': "required email"},
        messages: {'name': "Por favor indica tu nombre",'empresa': "Por favor ingresar Empresa",'telefono': "Por favor ingresa tu telefono",'email': "Por favor, indica una direcci&oacute;n de e-mail v&aacute;lida"},
        debug: true,errorElement: "label",
        submitHandler: function(form){
            $("#alert").show();
            $("#alert").html("<img src='images/ajax-loader.gif' style='vertical-align:middle;margin:0 10px 0 0' /><strong>Enviando mensaje...</strong>");
            setTimeout(function() {
                $('#alert').fadeOut('slow');
            }, 5000);
            $.ajax({
                type: "POST",
                url:"../tp2/php/send.php",
                data: "name="+escape($('#name').val())+"&empresa="+escape($('#empresa').val())+"&telefono="+escape($('#telefono').val())+"&email="+escape($('#email').val()),
                success: function(msg){
                    $("#alert").html(msg);
                    document.getElementById("name").value="";
                    document.getElementById("empresa").value="";
                    document.getElementById("telefono").value="";
                    document.getElementById("email").value="";
                    setTimeout(function() {
                        $('#alert').fadeOut('slow');
                    }, 5000);
 
                }
            });
        }
    });
});



