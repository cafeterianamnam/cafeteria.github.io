<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['correo'];         // nombre correcto del campo
    $contraseña = $_POST['contrasena']; // nombre correcto del campo

    // Verificar que el correo existe y obtener la contraseña almacenada
    $sql = "SELECT Contrasena FROM usuarios_vend WHERE Correo = ?"; // nombre de la columna correcto
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hash_contraseña);
        $stmt->fetch();

        // Verificar la contraseña ingresada con la almacenada
        if (password_verify($contraseña, $hash_contraseña)) {
            header("Location: tienda.html");
            exit(); // Asegúrate de detener la ejecución del script después de redirigir
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
