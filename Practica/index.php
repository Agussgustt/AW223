<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practica para examen de segundo parcial</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <header> 
    <h1> Perfil basico </h1>
    <p1> practica de examen </p1>
    </header>

    <nav>
        <a href=''>Formulario</a>
    </nav>

    <main>
    <section id='formulario'>
        <h2> Ingresa tus datos </h2>
            <form id='formulario' action='procesar.php' method='POST'>
                <div class="campo">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" placeholder="Ingresa tu nombre" required>
                </div>

                <div class="campo">
                    <label for="apellido">Apellido:</label>
                    <input type="text" name="apellido" placeholder="Ingresa tu apellido" required>
                </div>

                <div class="campo">
                    <label for="nacimiento">Año de nacimiento:</label>
                    <input type="number" name="nacimiento" placeholder="Ingresa tu año de nacimiento" required>
                </div>

                <div class="campo">
                    <label for="mensaje">Mensaje:</label>
                    <textarea name="mensaje" placeholder="Ingresa tu mensaje" required></textarea>
                </div>

                <button type="sumbit">Enviar</button>

                <div id="mensaje-exito" class="mensaje-exito">
            </form>
    </section>
</main>

<footer>
    <p> &copy; 2024 Agustin Rivera </p>
</footer>
<script src="./js/alerts.js"></script>
</body>
</html>