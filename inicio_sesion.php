<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['Email'];
    $contraseña = $_POST['Contraseña'];

    // Verificar que el email existe y obtener la contraseña almacenada
    $sql = "SELECT contraseña FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hash_contraseña);
        $stmt->fetch();

        // Verificar la contraseña ingresada con la almacenada
        if (password_verify($contraseña, $hash_contraseña)) {
            echo "Inicio de sesión exitoso";
            // Redirigir a la página que quieras
            header("Location: tienda.html");  // Redirige al dashboard o la página principal
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "El correo no está registrado";
    }

    $stmt->close();
    $conn->close();
}
?>