$(document).ready(function(){
    $.ajax({
      type: 'POST',
      url: 'php/cargar_listas.php'
    })
    .done(function(listas_rep){
      $('#lista_reproduccion').html(listas_rep)
    })
    .fail(function(){
      alert('Hubo un errror al cargar las listas_rep')
    })
  
    $('#lista_reproduccion').on('change', function(){
      var id = $('#lista_reproduccion').val()
      $.ajax({
        type: 'POST',
        url: 'php/cargar_videos.php',
        data: {'id': id}
      })
      .done(function(listas_rep){
        $('#videos').html(listas_rep)
      })
      .fail(function(){
        alert('Hubo un errror al cargar los vídeos')
      })
    })
  
    $('#enviar').on('click', function(){
      var resultado = 'Lista de reproducción: ' + $('#lista_reproduccion option:selected').text() +
      ' Video elegido: ' + $('#videos option:selected').text()
  
      $('#resultado1').html(resultado)
    })
  
  })
  // ------------------------------------------- INICIO EJERCICIO 2 TP 2---------------------------------------
  // Contenido de pestañas TP1ej2.php:
  $("#nav-seccion1-tab").on('click', function () {
    // console.log("Click hecho en seccion1!");
    $("#nav-seccion1").load("./tabs/Tab1.txt");
  });
  $("#nav-seccion2-tab").on('click', function () {
    // console.log("Click hecho en seccion2!");
    $("#nav-seccion2").load("./tabs/Tab2.txt");
  });
  $("#nav-seccion3-tab").on('click', function () {
    // console.log("Click hecho en seccion3!");
    $("#nav-seccion3").load("./tabs/Tab3.txt");
  });
  

//------------------------------------------- FIN EJERCICIO 2 --------------------------------------------------
