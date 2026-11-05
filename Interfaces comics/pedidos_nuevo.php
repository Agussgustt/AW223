<?php
/**
 * KomiX - Formulario de Nuevo Pedido
 * Archivo: pedidos_nuevo.php (Página 11 del diseño)
 */
$pagina_actual = 'pedidos';
$titulo_pagina = 'KomiX - Nuevo Pedido';
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<div class="layout-con-panel-derecho">
    <!-- Columna Principal -->
    <main class="main-column">
        <h1 class="page-title" style="margin-bottom: 24px;">Pedidos</h1>

        <div class="komix-table-container">
            <?php for ($i = 1; $i <= 6; $i++): ?>
                <div class="table-data-row" style="height: 48px; background-color: #ededed;">
                    <div style="color: #666; font-size: 0.9rem;">Registro de pedido #00<?php echo $i; ?></div>
                </div>
            <?php endfor; ?>
        </div>
    </main>

    <!-- Panel Lateral Derecho Rojo: + Nuevo Pedidos -->
    <aside class="side-panel-rojo">
        <h2 class="side-panel-title">+ Nuevo Pedidos</h2>

        <form action="pedidos.php" method="POST" class="side-panel-form">
            <div class="form-group-panel">
                <label>Nombre:</label>
                <input type="text" name="nombre" class="form-input-white" required>
            </div>

            <div class="form-group-panel">
                <label>Proveedor:</label>
                <input type="text" name="proveedor" class="form-input-white" required>
            </div>

            <div class="form-group-panel">
                <label>Fecha de emision:</label>
                <input type="date" name="fecha_emision" class="form-input-white" required>
            </div>

            <div class="form-group-panel">
                <label>Costo:</label>
                <input type="number" step="0.01" name="costo" class="form-input-white" required>
            </div>

            <button type="submit" class="btn-guardar-panel">
                Guardar
            </button>
        </form>
    </aside>
</div>

<?php include 'includes/footer.php'; ?>
