<?php
// Verificar si se enviaron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las contraseñas enviadas por el formulario
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    // Comparar las contraseñas
    if ($password1 == $password2) {
        $message = "<h1><em>Las contraseñas coinciden.<h1><em>";
    } else {
        $message = "<h1>Las contraseñas no coinciden.<h1>";
    }

    // Mostrar el mensaje
    echo "<p>$message</p>";
}
?>
