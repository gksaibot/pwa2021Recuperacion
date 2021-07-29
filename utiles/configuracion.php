<?php

/////////////////////////////
//    CONFIGURACION APP    //
/////////////////////////////

$PROYECTO ='PWA2021';

$GLOBALS['ROOT'] =$_SERVER['DOCUMENT_ROOT']."/$PROYECTO/";

include_once("utiles/funciones.php");

//variable que almacena el directorio del proyecto
$ROOT =$_SERVER['DOCUMENT_ROOT']."/$PROYECTO/";

// Variable que define la pagina de autenticacion del proyecto
$INICIO = "Location:http://".$_SERVER['HTTP_HOST']."/$PROYECTO/vista/login/login.php";

// variable que define la pagina principal del proyecto (menu principal)
$PRINCIPAL = "Location:http://".$_SERVER['HTTP_HOST']."/$PROYECTO/tp1/ejercicio1.php";

$_SESSION['ROOT']=$ROOT;

?>