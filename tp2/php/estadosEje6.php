<?php 
$conexion = mysqli_connect('localhost', 'root', '', "ajaxtp2");
  if (mysqli_connect_errno($conexion))
    echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
  $conexion->set_charset('utf8');
  

$color = $_GET['q'];

$resultado = $conexion->query("SELECT * FROM estados WHERE descripcion LIKE '%$color%'");

$datos = array();

while ($row=$resultado->fetch_assoc()){

  $datos[] = $row['descripcion'];
}

echo json_encode($datos);