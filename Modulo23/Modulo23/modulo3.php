<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Módulo 3: Seguimiento y Atención Técnica</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <?php
        require_once 'mostrar.php';
        $resultadoSolicitudes = mostrarSolicitud();
        $solicitudes = [];

        while ($solicitud = mysqli_fetch_assoc($resultadoSolicitudes)) {
            $solicitudes[] = $solicitud;
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
                <a href="modulo2.php" class="nav-link">Módulo 2: Solicitudes</a>
                <a href="modulo3.php" class="nav-link activo">Módulo 3: Seguimiento</a>
            </nav>
        </div>
    </header>

    <main class="contenedor">


        <section class="tarjeta tarjeta-seguimiento">
            <span class="etiqueta-integrante">Karen Hernández & Vanessa Zuñiga</span>
            <h2>Módulo de Seguimiento: Actualizar Estado de Solicitud</h2>
            <p class="descripcion-modulo">

                Consulta las solicitudes, selecciona una y actualiza su estado a "En proceso" o "Resuelta" con su observación.
            </p>


            <form action="actualizar.php" method="POST">

                <div class="colm-dos-columnas">
                    <div class="campo">
                        <label for="id_solicitud">Seleccionar Solicitud para Atender:</label>
                        <select id="id_solicitud" name="id_solicitud" required>
                            <option value="">-- Seleccionar solicitud --</option>
                            <?php foreach ($solicitudes as $solicitud): ?>
                                <option value="<?= htmlspecialchars((string) $solicitud['id_solicitud'], ENT_QUOTES, 'UTF-8') ?>">
                                    Folio #<?= htmlspecialchars((string) $solicitud['id_solicitud'], ENT_QUOTES, 'UTF-8') ?>
                                    - <?= htmlspecialchars($solicitud['solicitante'] ?? 'Solicitante no disponible', ENT_QUOTES, 'UTF-8') ?>
                                    - <?= htmlspecialchars($solicitud['nombre_equipo'] ?? 'Equipo no disponible', ENT_QUOTES, 'UTF-8') ?>
                                </option>
                            <?php endforeach; ?>
                        </select>

                    </div>

                    <div class="campo">
                        <label for="nuevo_estado">Cambiar estado de atención a:</label>
                        <select id="estado" name="estado" required>
                            <option value="">-- Seleccionar nuevo estado --</option>
                            <option value="En proceso">En proceso</option>
                            <option value="Resuelta">Resuelta</option>
                        </select>
                    </div>
                </div>

        
                <div class="campo">
                    <label for="observacion">Observación técnica sobre la atención:</label>
                    <textarea id="observacion" name="observacion" rows="3" placeholder="Detalle qué trabajo, reparación o prueba se realizó en el equipo..." required></textarea>
                </div>

                <div style="max-width: 250px;">
                    <button type="submit" class="btn btn-primario" style="width: 100%;">Guardar cambios</button>
                </div>
            </form>
        </section>

        
        <section class="tarjeta tarjeta-seguimiento">
            <h2>Mesa de Atención y Estado Actual de Solicitudes</h2>
            <p class="descripcion-modulo">Información sincronizada con la base de datos central en MySQL.</p>

            <div class="tabla-contenedor">
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>Folio #</th>
                            <th>Solicitante</th>
                            <th>Equipo</th>
                            <th>Problema Reportado</th>
                            <th>Estado Actual</th>
                            <th>Observaciones Técnicas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $rsMensaje = mostrarSolicitud();
                            while ($arrmensaje = mysqli_fetch_array($rsMensaje)) {
                                echo '<tr>
                                    <td>' . $arrmensaje['id_solicitud'] . '</td>
                                    <td>' . $arrmensaje['solicitante']  . '</td>
                                    <td>' .$arrmensaje['nombre_equipo']  . '</td>
                                    <td>' .$arrmensaje['problema']. '</td>
                                    <td><span class="badge badge-en-proceso">' .$arrmensaje['estado'] . '</span></td>
                                    <td><em>' . $arrmensaje['observacion'] . '</em></td>
                                </tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>

    </main>


    <footer class="footer-institucional">
        <div class="footer-contenido">
            <p class="footer-descripcion"><strong>Sistema Web de Soporte Técnico Universitario</strong><span>·</span> Ingeniería en Sistemas Computacionales</p>
            <p class="footer-docente">Docente: ISC. Iván Isay Guerra López</p>
            <p class="footer-tecnologias">HTML5 · CSS3 · JS · PHP · MySQL</p>
        </div>
    </footer>
    <script src="codigojs/AlertModulo3.js"></script>
</body>
</html>