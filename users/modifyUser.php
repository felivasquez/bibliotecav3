<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login- inicio </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<header>
</header>
<body>
    
</body>
</html>     


<?php
    include('../app/config/conex.php'); 
    //include("../public/session.php"); ?
    session_start();

    $id = $_SESSION["id"];

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', correo='$correo', contraseña='$contraseña' WHERE ID_usuario ='$id'";

    // Validación para mostrar los datos
    if (mysqli_query($conexion, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Registro actualizado exitósamente");';
        echo 'window.location="../users/listUser.php";';
        echo '</script>';
        
    } else {
        ini_set('error_reporting', E_ALL);
    }
?>