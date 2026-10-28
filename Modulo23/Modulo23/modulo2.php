<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo 2: Registro de Solicitudes - Soporte Técnico</title>
    <!-- Hoja de estilos externa separada -->
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <?php
        require_once 'mostrar_u.php';
        $usuarios = mostrarUsario();
        $usuario = [];

        while ($user = mysqli_fetch_assoc($usuarios)) {
            $usuario[] = $user;
        }
    ?>
    <?php
        require_once 'mostar_e.php';
        $equipos = mostrarEquipo();
        $equipo = [];

        while ($equip = mysqli_fetch_assoc($equipos)) {
            $equipo[] = $equip;
        }
    ?>

    <header class="header-institucional">
        <div class="header-contenedor">
            <div>
                <h1>Universidad Politecnica</h1>
                <p>Sistema de Soporte Técnico</p>
            </div>
            <nav class="nav-modulos">
                <a href="modulo1.php" class="nav-link">Módulo 1: Usuarios y Equipos</a>
                <a href="modulo2.php" class="nav-link activo" aria-current="page">Módulo 2: Solicitudes</a>
                <a href="modulo3.php" class="nav-link">Módulo 3: Seguimiento</a>
            </nav>
        </div>
    </header>

    <!-- Contenido Principal -->
    <main class="contenedor">

        <section class="tarjeta modulo-encabezado">
            <div>
                <span class="etiqueta-integrante">Agustin Cañon</span>
                <h2>Módulo de Solicitudes</h2>
                <p>Registra y consulta las solicitudes de soporte técnico con estado inicial «Pendiente».</p>
            </div>
        </section>

        <div class="columnas-modulo">
            <section class="tarjeta tarjeta-formulario">
                <h2>Registrar Solicitud</h2>
                <form action="guardar_solicitudes.php" method="POST">
                    <div class="campo">
                        <label for="id_usuario">Usuario Solicitante:</label>
                        <select id="id_usuario" name="id_usuario" required>
                            <option value="">-- Seleccionar usuario --</option>
                            <?php foreach ($usuario as $user): ?>
                                <option value="<?= htmlspecialchars((string) $user['id_usuario'], ENT_QUOTES, 'UTF-8') ?>">
                                    <?= htmlspecialchars((string) $user['nombre'], ENT_QUOTES, 'UTF-8') ?>
                                    - <?= htmlspecialchars((string) $user['correo'], ENT_QUOTES, 'UTF-8') ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="campo">
                        <label for="id_equipo">Equipo que presenta la falla:</label>
                        <select id="id_equipo" name="id_equipo" required>
                            <option value="">-- Seleccionar equipo --</option>
                            <?php foreach ($equipos as $equip): ?>
                                <option value="<?= htmlspecialchars((string) $equip['id_equipo'], ENT_QUOTES, 'UTF-8') ?>">
                                     <?= $equip['nombre_equipo']  ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="campo">
                        <label for="descripcion_problema">Descripción detallada del problema:</label>
                        <textarea id="descripcion_problema" name="descripcion" rows="4" placeholder="Explique qué ocurre con el equipo..." required></textarea>
                    </div>

                    <div class="alerta-info">
                        * El sistema asignará automáticamente el estado inicial: <strong>«Pendiente»</strong>.
                    </div>

                    <button type="submit" class="btn btn-primario btn-bloque">Registrar Solicitud</button>
                </form>
            </section>

            <section class="tarjeta tarjeta-tabla">
                <h2>Solicitudes Registradas</h2>
                <div class="tabla-contenedor">
                    <table class="tabla">
                        <thead>
                            <tr>
                                <th>Folio</th>
                                <th>Solicitante</th>
                                <th>Equipo</th>
                                <th>Problema</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once 'mostrar.php';
                                $resultadoSolicitudes = mostrarSolicitud();
                                $rsMensaje = mostrarSolicitud();
                            while ($arrmensaje = mysqli_fetch_array($rsMensaje)) {
                                echo '<tr>
                                    <td>' . $arrmensaje['id_solicitud'].  '</td>
                                    <td>' . $arrmensaje['solicitante'] . '</td>
                                    <td>' . $arrmensaje['nombre_equipo'] . '</td>
                                    <td>' . $arrmensaje['problema']. '</td>
                                    <td><span class="badge badge-en-proceso">' . $arrmensaje['estado'] . '</span></td>
                                </tr>';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>

    </main>

    <!-- Pie de página -->
    <footer class="footer-institucional">
        <div class="footer-contenido">
            <p class="footer-descripcion"><strong>Sistema Web de Soporte Técnico Universitario</strong><span>·</span> Ingeniería en Sistemas Computacionales</p>
            <p class="footer-docente">Docente: ISC. Iván Isay Guerra López</p>
            <p class="footer-tecnologias">HTML5 · CSS3 · JS · PHP · MySQL</p>
        </div>
    </footer>

    <script src="js/AlertModulo2.js"></script>
</body>
</html>