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
    

<?php
    session_start();
    include('../app/config/conex.php'); 
    ?>
    
    <form action="modifyUser.php"> <?php
        $id = $_SESSION['id'];
        $result = mysqli_query($conexion,"SELECT * FROM `usuarios` WHERE ID_usuario ='$id'");
        while($row = mysqli_fetch_array($result))
        {?>
            <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
                <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Modificar</h2>
                </div>
                <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                    <form class="space-y-6"  method="POST">
                        <div>
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                            <div class="mt-2">
                                <?php echo"<input type='text' placeholder='{$row['nombre']}' name='nombre' value='{$row['nombre']}' required>"; ?>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-between">
                                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Apellido</label>
                            </div>
                            <div class="mt-2">
                                <?php echo"<input type='text' placeholder='{$row['apellido']}' name='apellido' value='{$row['apellido']}' required>"; ?>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-between">
                                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">correo</label>
                            </div>
                            <div class="mt-2">
                                <?php echo"<input type='text' placeholder='{$row['correo']} ' name='correo' value='{$row['correo']}' required class='block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6'";?>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center justify-between">
                                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">contraseña</label>
                            </div>
                            <div class="mt-2">
                                <?php echo"<input type='text' placeholder='{$row['contraseña']} ' name='contraseña' value='{$row['contraseña']}' required class='block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6'";?>
                            </div>
                        </div> 
                        <button type='submit' >Actualizar</button>
                    </form>
                </div>
            </div> <?php
        } 
        ?>
    </form>