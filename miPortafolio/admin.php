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

     <nav aria-label="nav-admin">
        <a href="index.php" class="icon-link" title="Regresar al Portafolio">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="house" class="svg-inline--fa fa-house fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.72a16 16 0 0 0 15.92 16L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0                 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z"></path></svg>
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
                                <a href='editar.php?correo=" . $arrMensajes['correo'] . "' class='btn-accion editar' title='Editar'>
                                <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='24' height='24'>
                                    <path fill='none' d='M0 0h24v24H0z'/>
                                    <path d='M12 4c-4.418 0-8 3.582-8 8s3.582 8 8 8 8-3.582 8-8-3.582-8-8-8zm0 14c-3.3137 0-6-2.6863-6-6s2.6863-6 6-6 6 2.6863 6 6-2.6863 6-6 6zm1-9h-2v5h5v-2h-3z'/>
                                </svg>
                                </a>


                                <a href='eliminar_mensaje.php?correo=" . $arrMensajes['correo'] . "' class='btn-accion borrar' title='Borrar' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este mensaje?\");'>
                                <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' width='24' height='24'>
                                    <path fill='none' d='M0 0h24v24H0z'/>
                                    <path d='M6 19c0 1.1046.8954 2 2 2h8c1.1046 0 2-.8954 2-2V7H6v12zm3.5-7h1v5h-1v-5zm5 0h1v5h-1v-5zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z'/>
                                </svg>
                                </a>

                                
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


                               <!--  /* <a href='editar.php?correo=" . $arrMensajes['correo'] . "' class='btn-accion editar' title='Editar'>
                                <i class='fa-solid fa-file-pen'></i></a> */ -->
<!-- 
                                /* <a href='borrar_mensaje.php?correo=" . $arrMensajes['correo'] . "' class='btn-accion borrar' title='Borrar'>
                                <i class='fa-solid fa-trash-can'></i></a> */ -->