<?php

    require_once("conexion.php");

    if(!isset($_GET['correo'])){
        header("Location: admin.php");
        exit();
    }

    $correo_viejo = $_GET['correo'];

    $sql = "SELECT * FROM mensajes WHERE correo = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $correo_viejo);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $mensaje = $resultado->fetch_assoc();

    if(!$mensaje){
        header("Location: admin.php");
        exit();
    }
    ?>


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
    
     <nav aria-label="nav-admin">
        <a href="index.php" class="icon-link" title="Regresar al Portafolio">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="house" class="svg-inline--fa fa-house fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.72a16 16 0 0 0 15.92 16L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0                 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"></path></svg>
            <i class="fa-solid fa-house"></i> Inicio
        </a>
        <a href="admin.php" class="icon-link" title="Regresar a Admin">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="rotate-left" class="svg-inline--fa fa-rotate-left fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M500.33 5.67C512.52 17.85 512.52 38.48 500.33 50.66L278.63 272H464c13.25 0 24 10.75 24 24v32c0 13.25-10.75 24-24 24H192c-13.25 0-24-10.75-24-24V128c0-13.25 10.75-24 24-24h32c13.25 0 24 10.75 24 24v185.37L461.34 5.66c12.18-12.18 32.81-12.18 45 .01z"></path></svg>
            <i class="fa-solid fa-rotate-left"></i> Volver
        </a>
    </nav>

    <main>
        <section class="seccion-editar">
            <h2>Editar Mensaje</h2>

            <form action="actualizar_mensaje.php" method="POST" class="form-editar">
                <input type="hidden" name="correo_viejo" value="<?php echo $mensaje['correo']; ?>">
                <div class="campo">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" value="<?php echo $mensaje['nombre']; ?>" required>
                </div>

                <div class="campo">
                    <label for="email">Correo electronico</label>
                    <input type="email" id="email" name="email" value="<?php echo $mensaje['correo']; ?>" required>
                </div>

                <div class="campo">
                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" rows="5" required><?php echo $mensaje['mensaje']; ?></textarea>
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