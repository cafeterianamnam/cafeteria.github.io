<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['Usuario'];
    $email = $_POST['Email'];
    $contraseña = password_hash($_POST['Contraseña'], PASSWORD_DEFAULT);  // Cifra la contraseña

    // Preparar e insertar los datos en la base de datos
    $sql = "INSERT INTO usuarios (usuario, email, contraseña) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $usuario, $email, $contraseña);

    if ($stmt->execute()) {
        echo "Registro exitoso";
        header(header: "Location: tienda.html");  // Redirigir a la página de inicio
    } else {
        echo "Error en el registro: " . $conn->error;
    }

    $stmt->close();
    $conn->close();  
}
?>