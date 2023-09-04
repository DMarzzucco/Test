<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>Contacta con nosotros</h1>
  </header>
  <main>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nombre = $_POST["nombre"];
      $email = $_POST["email"];
      $mensaje = $_POST["mensaje"];

      // Aquí podrías procesar los datos del formulario, enviar correos, etc.
      // Por simplicidad, aquí solo mostraremos un mensaje de confirmación.
      // procesar los datos del formulario, enviar correos, etc.
      // Para simplificar, mostrar un mensaje de confirmación.
      echo "<p>¡Gracias por tu mensaje, $nombre! Te responderemos pronto.</p>";
    }
    ?>
