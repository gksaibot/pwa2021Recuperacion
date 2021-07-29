<?php

$conexion = $mysqli = mysqli_connect('localhost', 'root', '', "ajaxtp2");

$select=mysqli_query($conexion,"SELECT * FROM contactos");
while ($dat=mysqli_fetch_assoc($select)) {
    $arr[]=$dat;
}
echo json_encode($arr);
?>