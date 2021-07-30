<?php

$db= new mysqli("localhost", "root", "", "usuarios_db");
$limite=$_POST['limite'];
$query="SELECT user_id FROM user_details";
$res=$db->query($query);
$total=$res->num_rows;
//vamos a mostrar de a 4 en 4
$paginas=ceil($total/5);
$query="SELECT user_id, username, first_name FROM user_details limit $limite, 5";
$res=$db->query($query);
if ($res->num_rows>0){
    while ($fila=$res->fetch_array()){
        $nombre_usuario[$fila['user_id']]=$fila['username'];
        $nombre[$fila['user_id']]=$fila['first_name'];
        
        
    }
}
if ($limite>0){
    $limit=$limite-5;
    echo "<aside class=\"anterior\" onclick=\"cargarproductos(".$limit.")\">Anterior</aside>";
}
else{
    echo "<aside class=\"anterior\"></aside>";
}
foreach($nombre as $user_detail)
{
    echo "<article class=\"producto\">".$user_detail."</article>";
}
if ($limite<$total-5){
    $limit=$limite+5;
    echo "<aside class=\"siguiente\" onclick=\"cargarproductos(".$limit.")\">Siguiente</aside>";
}
else{
    echo "<aside class=\"siguiente\"></aside>";
}


?>