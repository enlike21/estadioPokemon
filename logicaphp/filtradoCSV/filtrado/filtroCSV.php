<?php
$pokemon_info = fopen('pokemon.csv', 'r');
$pokemon_img = fopen('metadata.csv', 'r');
$pokemon_completo = fopen('pokemon_completo.csv', 'w');
if ($pokemon_info !== false && $pokemon_img!== false && $pokemon_completo !== false) {
    $pokemon_info_array = array();
    $pokemon_img_array = array();
    // Leer y almacenar los datos de pokemon.csv
    while (($datos_pokemon_info = fgetcsv($pokemon_info)) !== false) {
        $pokemon_info_array[$datos_pokemon_info[0]] = $datos_pokemon_info;
    }
    // Leer y almacenar solo la columna "sprite_url" de metadata.csv
    while (($datos_pokemon_img = fgetcsv($pokemon_img)) !== false){
        $pokemon_img_array[$datos_pokemon_img[0]] = $datos_pokemon_img[1];
    }
    // Unir los datos por medio del id y guardarlos en el nuevo archivo CSV
    foreach ($pokemon_info_array as $id => $info) {
        if (isset($pokemon_img_array[$id])) {
            $datos_pokemon_info = $info;
            $sprite_url = $pokemon_img_array[$id];
            // Agregar la columna "sprite_url" a los datos de pokemon.csv
            $datos_pokemon_info[] = $sprite_url;
            // Escribir los datos combinados en el archivo pokemon_completo.csv
            fputcsv($pokemon_completo, $datos_pokemon_info);
        }
    }
    fclose($pokemon_info);
    fclose($pokemon_img);
    fclose($pokemon_completo);
    echo 'Se ha creado el archivo pokemon_completo.csv con los datos combinados.';
} else {
    echo 'No se pudo abrir uno o más archivos.';
}
?>