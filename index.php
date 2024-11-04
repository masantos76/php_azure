<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Hola Mundo en PHP!</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1><?php echo "¡Hola, Mundo!"; ?></h1>

        <!-- Formulario para solicitar el nombre del usuario -->
        <form method="POST" action="index.php">
            <label for="name">Introduce tu nombre:</label>
            <input type="text" id="name" name="name" placeholder="Escribe tu nombre aquí">
            <button type="submit">Enviar</button>
        </form>

        <?php
        // Comprobar si se ha enviado el formulario
        if (isset($_POST['name']) && !empty($_POST['name'])) {
            $name = htmlspecialchars($_POST['name']);
            echo "<p class='message'>¡Hola, $name! Bienvenido a mi primera aplicación PHP.</p>";
        } else {
            echo "<p class='message'>Introduce tu nombre para recibir un saludo personalizado.</p>";
        }
        ?>
    </div>
</body>
</html>

