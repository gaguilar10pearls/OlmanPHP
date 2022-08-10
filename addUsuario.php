<?php

$usuarioNombre = $_POST["nombreUsuario"].' '.$_POST['apellidoUsuario'];
$usuarioObservacion = $_POST['Observaciones'];



$usuario =array('Nombre'=>$usuarioNombre,'Observacion'=>$usuarioObservacion);

session_start();
if( empty($_SESSION['usuarios'])  ){
    array_push($_SESSION['usuarios'],$usuario);
}else{
   
    array_push($_SESSION['usuarios'],$usuario);
}

header("Location:formularios.html");

?>