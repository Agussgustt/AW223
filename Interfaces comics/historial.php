<?php
/**
 * KomiX - Historial de Tickets y Ventas
 * Archivo: historial.php (Página 14 del diseño)
 */
$pagina_actual = 'ventas';
$titulo_pagina = 'KomiX - Historial de Ventas';
include 'includes/header.php';
include 'includes/sidebar.php';

$tickets = [
    ['folio' => 'TK-00981', 'fecha' => '02/01/2024', 'cliente' => 'Alejandro Morales', 'vendedor' => 'Mendoza A.', 'estado' => 'verde'],
    ['folio' => 'TK-00982', 'fecha' => '15/02/2024', 'cliente' => 'Beatriz Gómez', 'vendedor' => 'García R.', 'estado' => 'verde'],
    ['folio' => 'TK-00983', 'fecha' => '22/03/2024', 'cliente' => 'Carlos Fuentes', 'vendedor' => 'Mendoza A.', 'estado' => 'rojo'],
    ['folio' => 'TK-00984', 'fecha' => '10/05/2024', 'cliente' => 'Diana López', 'vendedor' => 'Pérez L.', 'estado' => 'verde'],
    ['folio' => 'TK-00985', 'fecha' => '18/06/2024', 'cliente' => 'Eduardo Silva', 'vendedor' => 'Mendoza A.', 'estado' => 'naranja'],
];
?>

<main class="main-content">
    <div class="content-header-row" style="margin-bottom: 20px;">
        <h1 class="page-title">Historial</h1>
        <div class="busqueda-wrapper">
            <i class="fa-solid fa-magnifying-glass search-icon"></i>
            <input type="text" class="input-busqueda-pill" placeholder="Buscador por folio o cliente" style="width: 320px;">
        </div>
    </div>

    <!-- Caja Roja de Filtros de Búsqueda Avanzada -->
    <div class="caja-busqueda-avanzada">
        <div class="caja-titulo">Filtros de busqueda avanzada</div>
        <form action="historial.php" method="GET" class="caja-filtros-row">
            <div style="display: flex; align-items: center; gap: 8px;">
                <label style="font-weight: 700;">Desde:</label>
                <input type="text" name="desde" value="01 / 01 / 2024" class="input-fecha-white" style="width: 140px; text-align: center;">
            </div>

            <div style="display: flex; align-items: center; gap: 8px;">
                <label style="font-weight: 700;">Hasta:</label>
                <input type="text" name="hasta" value="01 / 08 / 2024" class="input-fecha-white" style="width: 140px; text-align: center;">
            </div>

            <button type="submit" class="btn-consultar-white">Consultar</button>
        </form>
    </div>

    <!-- Tabla del Historial -->
    <div class="komix-table-container">
        <div class="table-header-row" style="grid-template-columns: 1.5fr 1.5fr 2fr 1.5fr 1fr 60px;">
            <div>Folio:</div>
            <div>Fecha:</div>
            <div>Cliente:</div>
            <div>Vendedor:</div>
            <div style="text-align: center;">Estado:</div>
            <div style="text-align: right;"></div>
        </div>

        <?php foreach ($tickets as $t): ?>
            <div class="table-data-row" style="grid-template-columns: 1.5fr 1.5fr 2fr 1.5fr 1fr 60px;">
                <div style="font-weight: 700;"><?php echo htmlspecialchars($t['folio']); ?></div>
                <div style="color: #444;"><?php echo htmlspecialchars($t['fecha']); ?></div>
                <div style="font-weight: 600;"><?php echo htmlspecialchars($t['cliente']); ?></div>
                <div style="color: #444;"><?php echo htmlspecialchars($t['vendedor']); ?></div>
                <div style="text-align: center;">
                    <span class="badge-estado <?php echo $t['estado']; ?>"></span>
                </div>
                <div class="table-actions" style="justify-content: flex-end;">
                    <button class="btn-action-icon" title="Eliminar"><i class="fa-solid fa-trash-can"></i></button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
