<?php include('../app/config/conex.php'); 
//include("../public/session.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body>
    <nav  class="bg-violet-200">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
          <div class="relative flex h-16 items-center justify-between">

            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
              <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4">
                  <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                  <a href="../public/inicio.php" class="rounded-md px-3 py-2 text-sm font-medium bg-gray-700 text-gray-300 hover:bg-gray-700 hover:text-white">volver inicio</a>
                  <a href="../libros/addLibros.php" class="rounded-md bg-gray-700 hover:bg-gray-700 px-3 py-2 text-sm font-medium text-white">Agregar Libro</a>
                </div>
              </div>
            </div>
              <div class="relative ml-3">
                <div>
                  <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full" src="../public/img/userProfile.png" alt="">
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      
        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
          <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Libros</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">volver inicio</a>
          </div>
        </div>
    </nav>
    <?php 
    $sql = "SELECT libros.titulo, libros.autor, libros.ISBN, libros.año_publicacion,imageLink, pdf_link , categorias.nombre_categoria
        FROM libros
        INNER JOIN categorias ON libros.ID_categoria = categorias.ID_categoria";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) { ?>
          <section id="Projects" class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">
              <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                  <a href="<?php echo $row['pdf_link']; ?>">
                      <img src="<?php echo $row['imageLink'];?>" alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                      <div class="px-4 py-3 w-72">
                          <span class="text-gray-400 mr-3 uppercase text-xs"><?php echo $row['autor'];?></span>
                          <p class="text-lg font-bold text-black truncate block capitalize"> <?php echo $row['titulo'];?></p>
                          <div class="flex items-center">
                              <p class="text-lg font-semibold text-black cursor-auto my-3"><?php echo $row['año_publicacion'];?></p>
                              <p class="text-sm text-gray-600 cursor-auto ml-5"><?php echo $row['nombre_categoria'];?></p>
                          </div>
                      </div>
                  </a>
              </div>            
          </section>
  <?php }
    }?> 
</body>
</html>
