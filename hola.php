<?php

echo "hola mundo";
echo $_SERVER ['HTTP_USER_AGENT'];
if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Edg')) {
    echo 'Está utilizando edge.';

?>
    <h3>str_contains() ha devuelto true</h3>
<?php
} else {
    
}
    ?>
    <p>esto no es edge</p>
    <?php
    //son lo mismo pero con diferente sintaxis
    echo "hola mundo"; 
    $variable = "hola mundo";
    echo $variable;

    $variableNumerica = 123;
    echo $variableNumerica;
    
    
?>

<?php
$jugador = [
    'nombre' => $nomImgesado,
    'asiertos' => $asiertosIngresados,
];

$juegos = [
    'jugadores' => $jugadores,
    'resultado' => $resultado,
    'intentos' => $intentos,
];

if ($jugador['asiertos'] > 0) {
    $juegos['ganador'] = $jugador['nombre'];
    $juegos['perdedor'] = null;
}



function guardarProgresojuegos($nombre, $datos) {
    $rutaCarpeta = "progreso_jugadores/$nombre";
    
    // Verificar si la carpeta existe, si no, crearla
    if (!is_dir($rutaCarpeta)) {
        mkdir($rutaCarpeta, 0777, true);
    }
    
    // Guardar los datos en un archivo JSON dentro de la carpeta del jugador
    $rutaArchivo = "$rutaCarpeta/progreso.json";
    file_put_contents($rutaArchivo, json_encode($datos));
}

function cargarDatos ($jugador, $juego) {
    $rutaArchivo = "progreso_jugadores/$jugador/progreso.json";
    
    if (file_exists($rutaArchivo)) {
        $datos = json_decode(file_get_contents($rutaArchivo), true);
        return $datos;
    } else {
        return null; // o puedes retornar un valor por defecto
    }
}
if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];

    // Creamos datos iniciales para un nuevo jugador
    $datosIniciales = ["nivel" => 1, "vida" => 100];
    
    // Esta es la función de memoria.php que crea la carpeta y guarda el JSON
    guardarProgreso($nombre, $datosIniciales); 
}
// la funcion $_post es un array asociativo que contiene los datos enviados por el 
// formulario HTML mediante el método POST. En este caso, se verifica si el campo 'nombre' ha sido 
// enviado, y si es así, se guarda el progreso del jugador utilizando la función guardarProgreso() 
// que se encuentra en memoria.php.\
?>