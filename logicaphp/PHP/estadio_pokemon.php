<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'Pokemon.php';
    // Ruta del archivo CSV
$csvFile = '..\filtradoCSV\filtrado\pokemon_completo.csv';

// Abrir el archivo en modo lectura
if (($handle = fopen($csvFile, 'r')) !== false) {

    // Array para almacenar los objetos Pokemon
    $pokemons = array();

    // Leer el archivo línea por línea
    while (($data = fgetcsv($handle, 1000, ',')) !== false) {
        // Obtener los datos de cada columna
        $name = $data[1];
        $type1 = $data[2];
        $type2 = $data[3];
        $total = $data[4];
        $hp = $data[5];
        $attack = $data[6];
        $defense = $data[7];
        $spAtk = $data[8];
        $spDef = $data[9];
        $speed = $data[10];
        $generation = $data[11];
        $legendary = $data[12];
        $spriteUrl = $data[13];

        // Crear un objeto Pokemon con los datos
        $pokemon = new Pokemon($name, $type1, $type2, $total, $hp, $attack, $defense, $spAtk, $spDef, $speed, $generation, $legendary, $spriteUrl);

        // Agregar el objeto Pokemon al array
        $pokemons[] = $pokemon;
    }

    // Cerrar el archivo
    fclose($handle);

    // Ahora tienes un array de objetos Pokemon con la información del archivo CSV
    // Puedes acceder a cada objeto y sus atributos utilizando los getters
    foreach ($pokemons as $pokemon) {
        echo $pokemon->getName() . "\n";
        echo $pokemon->getType1() . "\n";
    }
} else {
    echo 'No se pudo abrir el archivo CSV.';
}


    ?>
</body>
</html>