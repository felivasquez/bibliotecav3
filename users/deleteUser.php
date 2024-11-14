<?php
    include('../app/config/conex.php'); 
    //include("../public/session.php"); ?
    session_start();

    $id = $_SESSION["id"];
    $sql = "DELETE FROM `usuarios` WHERE ID_usuario = '$id'";
    
   // $sql = "DELETE FROM 'usuarios' WHERE ID_usuario = '$id'";
    mysqli_query($conexion, $sql);
    if(mysqli_query($conexion, $sql)){
        echo '<script language="javascript">';
        echo 'alert("Registro eliminado exitósamente");';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Error eliminando registro!");';
        echo '</script>';
    }

   

?>