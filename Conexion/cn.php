<?php
    //function conectar(){
    $conexion = new mysqli
    ('localhost','root','','Cafe');
    $acentos = $conexion ->query("set names 'utf8'");
    if($conexion ->connect_error){
        
        die('Error en la conexion: '.
        $conexion->connect_error);

}
    

?>