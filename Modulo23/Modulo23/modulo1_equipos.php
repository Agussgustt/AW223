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
                <a href="modulo1.php">1. Usuarios</a>
                <a href="modulo1_equipos.php" class="activo" aria-current="page">2. Equipos</a>
            </nav>
        </section>

        <main class="columnas-modulo">
            <section class="tarjeta tarjeta-formulario">
                <div class="tarjeta-titulo-con-icono">
                    <svg class="icono-azul" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                        <line x1="8" y1="21" x2="16" y2="21"></line>
                        <line x1="12" y1="17" x2="12" y2="21"></line>
                    </svg>
                    <h2>Registrar Equipo</h2>
                </div>

                <form action="guardar_equipos.php" method="post">
                    <div class="campo">
                        <label for="nombreEquipo">Nombre del equipo:</label>
                        <input type="text" id="nombreEquipo" name="nombreEquipo" class="input-mono" placeholder="Ej. PC-LAB-01 o Laptop HP" required>
                    </div>

                    <div class="campo">
                        <label for="descripcionEquipo">Descripción:</label>
                        <textarea id="descripcionEquipo" name="descripcionEquipo" rows="4" placeholder="Ej. Core i5, 8GB RAM, ubicada en Sala 2" required></textarea>
                    </div>

                    <button type="submit" class="btn-guardar">Guardar Equipo</button>
                </form>
            </section>

            <section class="tarjeta tarjeta-tabla">
                <h2 class="tabla-titulo">Lista de Equipos Registrados (6)</h2>

                <div class="tabla-scroll">
                    <table class="tabla-datos">
                        <thead>
                            <tr>
                                <th style="width: 70px;">Folio Equipo #</th>
                                <th style="width: 250px;">Nombre del Equipo</th>
                                <th>Descripción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'consulta_equipos.php';
                            $rsMensaje=consultaEquipos();
                            
                            while($arrmensaje=mysqli_fetch_array($rsMensaje)){

                                echo "<tr>
                                    <td>", $arrmensaje['id_equipo'], "</td>
                                    <td>", $arrmensaje['nombre_equipo'], "</td>
                                    <td>", $arrmensaje['descripcion_equipo'], "</td>
                                </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
    <footer class="footer-institucional">
        <div class="footer-contenido">
            <p class="footer-descripcion"><strong>Sistema Web de Soporte Técnico Universitario</strong><span>·</span> Ingeniería en Sistemas Computacionales</p>
            <p class="footer-docente">Docente: ISC. Iván Isay Guerra López</p>
            <p class="footer-tecnologias">HTML5 · CSS3 · JS · PHP · MySQL</p>
        </div>
    </footer>

    <script src="codigojs/AlertModulo1Equipos.js"></script>
</body>
</html>