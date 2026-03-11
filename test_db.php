<?php
$pdo = new PDO('mysql:host=127.0.0.1;port=3307;dbname=sistema_ventas', 'root', '');
if ($pdo) {
    echo "¡Conexión exitosa!";
} else {
    echo "Error de conexión.";
}
?>