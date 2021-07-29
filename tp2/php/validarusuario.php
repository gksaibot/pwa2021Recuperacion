<?php
require_once 'conexionEje4.php';

  $usuario=$_REQUEST['usuario'];
  $mysqli = getConn();
  $query = "SELECT * FROM `usuarios` WHERE usuario='$usuario'";
  $db= $mysqli->query($query);
  
  if ($db->num_rows == 0){
    echo "Usuario Disponible";
}
else{
    echo "Usuario no disponible";
}


?>