/usuario.php
<?php
// Simular BD
$usuarios = [
    1 => ["nombre" => "Ana Pérez", "correo" => "ana@example.com"],
    2 => ["nombre" => "Luis Gómez", "correo" => "luis@example.com"],
    3 => ["nombre" => "María López", "correo" => "maria@example.com"],
    4 => ["nombre" => "Carlos Ruiz", "correo" => "carlos@example.com"],
    5 => ["nombre" => "Sofía Díaz", "correo" => "sofia@example.com"]
];

// Leer el parámetro enviado por AJAX
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Validar si existe el usuario
if (isset($usuarios[$id])) {
    $user = $usuarios[$id];
    echo "<strong>Nombre:</strong> " . htmlspecialchars($user['nombre']) . "<br>";
    echo "<strong>Correo:</strong> " . htmlspecialchars($user['correo']);
} else {
    echo "No se encontró un usuario con ese ID.";
}
?>