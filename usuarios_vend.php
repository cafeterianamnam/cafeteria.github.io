<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nombre = $_POST['Usuario'];
    $Apellido = $_POST['Apellido'];
    $Correo = $_POST['Correo'];
    $Contrasena = password_hash($_POST['Contrasena'], PASSWORD_DEFAULT);  // Cifra la contraseña

    // Preparar e insertar los datos en la base de datos
    $sql = "INSERT INTO usuarios_vend (Usuario, Apellido, Correo, Contrasena) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $Nombre, $Apellido, $Usuario, $Contrasena);

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