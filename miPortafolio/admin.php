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
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Mensaje</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ana</td>
                            <td>anita@Example.com</td>
                            <td>Hola, Soy Ana y me interasa tu portafolio</td>
                            <td class="acciones">
                                <a href="editar.php?id=1" class="btn-accion editar" title="Editar"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="#" class="btn-accion borrar" title="Borrar"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Josesin</td>
                            <td>jose@example.com</td>
                            <td>Quisiera mas informacion sobre tus proyectos</td>
                            <td class="acciones">
                                <a href="editar.php?id=2" class="btn-accion editar" title="Editar"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="#" class="btn-accion borrar" title="Borrar"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
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