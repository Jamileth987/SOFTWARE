<?php
// Este es un programa en PHP que saluda al usuario

// Solicitar el nombre del usuario
echo "¿Cuál es tu nombre? ";
$nombre = trim(fgets(STDIN)); // Leer la entrada del usuario desde la consola

// Mostrar el saludo personalizado
echo "¡Hola, $nombre! Bienvenido al mundo de PHP.\n";
?>
