<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selección de Pokémon</title>
    <style>
        body{
            text-align: center;
            align-items: center;
            background-color: antiquewhite;
        }
        table,tr,td{
            border: 1px solid   #ccc;
            text-align: center;
            align-items: center;
            font-weight: bold;
            background-color: white;
        }
        th{
            font-size:xx-large;
        }
        table{
            margin-bottom: 1rem;
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }
        img{
            width: 7rem;
        }
    </style>
</head>
<body>
    <h1>Selección de Pokémon</h1>
    <p>Elige tu equipo Pokémon formado por 4 Pokémon.</p>
    <p>Selecciona los Pokémon mediante checkboxes:</p>
    <?php
    // Abrir el archivo CSV
    $archivo = fopen("../filtradoCSV/filtrado/pokemon_completo.csv", "r");

    // Leer los datos del archivo CSV y guardarlos en un array
    $pokemons = array();
    while (($datos = fgetcsv($archivo, 1000, ",")) !== FALSE) {
        $pokemons[] = $datos;
    }

    // Cerrar el archivo CSV
    fclose($archivo);
    ?>

    <!-- Crear la tabla de selección para cada generación -->
    <?php
    $generaciones = array(); // Array para almacenar las generaciones

    // Obtener las generaciones
    foreach ($pokemons as $pokemon) {
        $generacion = $pokemon[11];
        if (!in_array($generacion, $generaciones)) {
            $generaciones[] = $generacion;
            echo "<table>";
            echo "<tr><th colspan='9'>Generación $generacion</th></tr>";
            $contador = 0; // Contador para controlar el número máximo de columnas por fila
        }
        if ($pokemon[11] == $generacion) {
            if ($contador === 9) {
                echo "</tr><tr>"; // Cerrar la fila actual y abrir una nueva fila
                $contador = 0; // Reiniciar el contador de columnas
            }
            echo "<td>";
            echo "<img src='{$pokemon[13]}' alt='{$pokemon[1]}'><br>";
            echo "{$pokemon[1]}<br>";
            echo "<input type='checkbox' name='pokemon[]' value='{$pokemon[0]}'><br>";
            echo "</td>";
            $contador++;
        }
    }
    echo "</table>";
    ?>
    <button type="submit">Enviar</button>
</body>
</html>