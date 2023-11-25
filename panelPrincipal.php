<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>PANEL PRINCIPAL</h1>
    <h3>Bienvenido usuario: </h3>
    <a href="">ES (Español)</a>|<a href="">EN (English)</a>
    <br>
    <a href="">Cerrar sesión</a>
    <h2>Lista de productos</h2>
    <?php
    // Especificar la ruta del archivo
    $file_path = true ? './categorias_es.txt' : './categorias_en.txt';

    // Abrir el archivo en modo lectura y especificar un puntero
    $file_pointer = fopen($file_path, 'r');

    // Verificar que el archivo se haya abierto correctamente
    if ($file_pointer) {
        // Leer el contenido del archivo línea por línea y desplegarlo como una lista desordenada
        echo '<ul>';
        while (!feof($file_pointer)) {
            echo '<li>' . (str_replace(',', '', fgets($file_pointer))) . '</li>';
        }
        echo '</ul>';

        // Cerrar el archivo
        fclose($file_pointer);
    } else {
        // El archivo no se pudo abrir
        echo "No fue posible abrir el archivo";
    }
    ?>
</body>

</html>