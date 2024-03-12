<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    
    // Mostrar los datos recibidos
    echo "<h2>Datos recibidos:</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Mensaje:</strong> $mensaje</p>";
// Mostrar mensaje de confirmación al usuario
echo "<p>¡Gracias! Su formulario ha sido enviado correctamente.</p>";
} else {
    // Si no es una solicitud POST, redirigir al formulario
    header("Location: formulario_contacto.html");
    exit();
}
?>