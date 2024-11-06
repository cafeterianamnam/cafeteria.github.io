<?php
// Incluir el archivo de conexión
include 'conexion.php';

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $Nombre = $_POST['Nombres'];
    $Apellido = $_POST['Apellidos']; // Mantén este nombre para el campo del formulario
    $Correo = $_POST['Correo'];
    $Contrasena = password_hash($_POST['Contrasena'], PASSWORD_DEFAULT);  // Encriptar la contraseña

    // Preparar la consulta SQL para insertar los datos utilizando declaraciones preparadas
    $stmt = $conn->prepare("INSERT INTO usuarios_vend (Nombre, Apellido, Correo, Contrasena) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $Nombre, $Apellido, $Correo, $Contrasena);

    // Ejecutar la consulta y verificar si fue exitosa
    if ($stmt->execute()) {
        echo "Registro exitoso";
        header("Location: tienda.html");  // Redirigir a la página de inicio
        exit();  // Asegurarse de que no se ejecute más código después de redirigir
    } else {
        echo "Error: " . $stmt->error;  // Mostrar error si ocurre
    }

    // Cerrar la declaración
    $stmt->close();
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
