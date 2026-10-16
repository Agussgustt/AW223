<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
     <header>
        <h1>Zona Administracion</h1>
        <p>Mensajes Recibidos</p>
    </header>

     <nav class="nav-admin">
        <a href="index.html" title="Regresar al Portafolio">
            <i class="fa-solid fa-house"></i> Inicio
        </a>
    </nav>

    <main class="main-admin">
        <section class="seccion-admin">
            <h2>Mensajes Recibidos</h2>
            
            <div class="contenedor-tabla">
                <table class="tabla-mensajes">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Mensaje</th>
                            <th>Fecha</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            require 'consulta_mensajes.php';
                            $rsMensajes= consultaMensajes();
                            while($arrMensajes= mysqli_fetch_array($rsMensajes)){
                        echo"<tr>
                            <td>" . $arrMensajes['nombre'] . "</td>
                            <td>" . $arrMensajes['correo'] . "</td>
                            <td>" . $arrMensajes['mensaje'] . "</td>
                            <td>" . $arrMensajes['timeStaps'] . "</td>
                            <td class='acciones'>
                                <a href='editar.php?id=" . $arrMensajes['id'] . "' class='btn-accion editar' title='Editar'><i class='fa-solid fa-pen-to-square'></i></a>
                                <a href='#' class='btn-accion borrar' title='Borrar'><i class='fa-solid fa-trash'></i></a>
                            </td>
                        </tr>";
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <footer>
        <p>2026 Mi portafolio web</p>
        <p>Practica de Programacion Web - Todos los derechos reservados</p>
    </footer>
</body>
</html>