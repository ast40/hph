<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Aquí puedes realizar la lógica de autenticación, por ejemplo, verificar las credenciales en una base de datos.

    // En este ejemplo, simplemente imprimimos los datos recibidos.
    echo "Correo electrónico: " . $email . "<br>";
    echo "Contraseña: " . $password;
}
?>
