<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo 1: Usuarios y Equipos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <header class="header-institucional">
        <div class="header-contenedor">
            <div>
                <h1>Universidad Politecnica</h1>
                <p>Sistema de Soporte Técnico</p>
            </div>
            <nav class="nav-modulos">
                <a href="modulo1.php" class="nav-link">Módulo 1: Usuarios y Equipos</a>
                <a href="modulo2.php" class="nav-link">Módulo 2: Solicitudes</a>
                <a href="modulo3.php" class="nav-link activo">Módulo 3: Seguimiento</a>
            </nav>
        </div>
    </header>

    <main class="contenedor">
        <section class="tarjeta modulo-encabezado">
            <div>
                <span class="etiqueta-integrante">Kevin Piña</span>
                <h2>Módulo de Usuarios y Equipos</h2>
                <p>Registra los datos que servirán de base para las solicitudes de soporte.</p>
            </div>
            <nav class="selector-vistas" aria-label="Vistas del módulo 1">
                <a href="modulo1.php" class="activo" aria-current="page">1. Usuarios</a>
                <a href="modulo1_equipos.php">2. Equipos</a>    
            </nav>
        </section>

        <div class="columnas-modulo">
            <section class="tarjeta tarjeta-formulario">
                <h2>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <line x1="19" y1="8" x2="19" y2="14"></line>
                        <line x1="22" y1="11" x2="16" y2="11"></line>
                    </svg>
                    Registrar Usuario
                </h2>
                <form action="guardar_usuario.php" method="post">
                <div class="campo">
                    <label for="nombreUsuario">Nombre completo:</label>
                    <input type="text" id="nombreUsuario" name="nombreUsuario" placeholder="Ej. Ing. Carlos Mendoza">
                </div>
                <div class="campo">
                    <label for="correoUsuario">Correo electrónico:</label>
                    <input type="email" id="correoUsuario" name="correoUsuario" placeholder="ejemplo@universidad.edu.mx">
                </div>
                <button type="submit" class="btn btn-primario btn-bloque">Guardar Usuario</button>
                </form>
            </section>

            <section class="tarjeta">
                <h2>Lista de Usuarios Registrados</h2>
                <div class="tabla-contenedor">
                    <table class="tabla">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Fecha De Registro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'consulta_usuarios.php';
                            $rsMensaje=consultaUsuarios();
                            
                            while($arrmensaje=mysqli_fetch_array($rsMensaje)){

                                echo "<tr>
                                    <td>", $arrmensaje['nombre'], "</td>
                                    <td>", $arrmensaje['correo'], "</td>
                                    <td>", $arrmensaje['fecha'], "</td>
                                </tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </main>
    <footer class="footer-institucional">
        <div class="footer-contenido">
            <p class="footer-descripcion"><strong>Sistema Web de Soporte Técnico Universitario</strong><span>·</span> Ingeniería en Sistemas Computacionales</p>
            <p class="footer-docente">Docente: ISC. Iván Isay Guerra López</p>
            <p class="footer-tecnologias">HTML5 · CSS3 · JS · PHP · MySQL</p>
        </div>
    </footer>

    <script src="codigojs/AlertModulo1User.js"></script>
</body>
</html>