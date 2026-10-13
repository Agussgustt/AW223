<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicion</title>
      <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
     <header>
        <h1>Zona Administracion</h1>
        <p>Formulario para Editar</p>
    </header>
    
     <nav class="nav-admin">
        <a href="admin.php" title="Regresar a Administracion">
            <i class="fa-solid fa-rotate-left"></i> Volver
        </a>
        <a href="index.html" title="Regresar al Portafolio">
            <i class="fa-solid fa-house"></i> Inicio
        </a>
    </nav>

    <main>
        <section class="seccion-editar">
            <h2>Editar Mensaje</h2>

            <form action="#" method="POST" class="form-editar">
                <div class="campo">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" value="Ana" required>
                </div>

                <div class="campo">
                    <label for="email">Correo electronico</label>
                    <input type="email" id="email" name="email" value="ana@example.com" required>
                </div>

                <div class="campo">
                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" rows="5" required>Hola, me interesa tu portafolio.</textarea>
                </div>

                <button type="submit" class="btn-actualizar">Actualizar Mensaje</button>
            </form>
        </section>
    </main>
    <footer>
        <p>2026 Mi portafolio web</p>
        <p>Practica de Programacion Web - Todos los derechos reservados</p>
    </footer>
</body>
</html>