<?php
session_start(); // Iniciamos sesión para que los nombres persistan

// Si no existe la lista de jugadores, la creamos vacía
if (!isset($_SESSION['jugadores'])) { // PUNTO , en esta accion isset es para verificar si la variable de sesión 'jugadores' ya existe, si no existe, se inicializa como un array vacío. Esto asegura que siempre tengamos una estructura para almacenar los nombres de los jugadores.
    $_SESSION['jugadores'] = [];
}

// Función para guardar el nombre
function guardarNombre($nombre)
{
    if (!empty($nombre)) {
        // Limpiamos el nombre para evitar problemas de seguridad simples
        $nombreLimpio = htmlspecialchars(trim($nombre));
        $_SESSION['jugadores'][] = $nombreLimpio;
        return true;
    }
    return false;
}

// Lógica para detectar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre_jugador'])) {
    guardarNombre($_POST['nombre_jugador']);
    // Redirigimos a la interfaz para evitar que se reenvíe el formulario al refrescar
    header("Location: interfaz.php");
    exit();
}
