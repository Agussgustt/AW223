<?php
/**
 * KomiX - Modal de Detalles de Pedido
 * Archivo: pedidos_detalle.php (Página 10 del diseño)
 */
$pagina_actual = 'pedidos';
$titulo_pagina = 'KomiX - Detalles de Pedido';
include 'includes/header.php';
include 'includes/sidebar.php';

$detalles = [
    ['producto' => 'Spider-Man Vol. 1 #300', 'cantidad' => 20, 'precio_unit' => '$75.00', 'subtotal' => '$1,500.00'],
    ['producto' => 'Batman Year One Deluxe', 'cantidad' => 15, 'precio_unit' => '$90.00', 'subtotal' => '$1,350.00'],
    ['producto' => 'X-Men Days of Future Past', 'cantidad' => 10, 'precio_unit' => '$120.00', 'subtotal' => '$1,200.00']
];
?>

<main class="main-content">
    <div class="content-header-row">
        <h1 class="page-title">Pedidos</h1>
        <a href="pedidos_nuevo.php" class="btn-nuevo-rojo">+ Crear pedido</a>
    </div>

    <!-- Barra de Búsqueda -->
    <div class="filter-bar-row">
        <div class="busqueda-wrapper">
            <i class="fa-solid fa-magnifying-glass search-icon"></i>
            <input type="text" class="input-busqueda-pill" placeholder="Busqueda (por ID)" value="PED-001">
        </div>
    </div>

    <!-- Tabla de Fondo -->
    <div class="komix-table-container" style="opacity: 0.6; pointer-events: none;">
        <div class="table-header-row" style="grid-template-columns: 1.2fr 2fr 1.5fr 100px 1.5fr 120px;">
            <div>ID pedido:</div>
            <div>Proveedor:</div>
            <div>Fecha emision:</div>
            <div style="text-align: center;">Estado:</div>
            <div>Costo total:</div>
            <div style="text-align: right;">Acciones:</div>
        </div>

        <div class="table-data-row" style="grid-template-columns: 1.2fr 2fr 1.5fr 100px 1.5fr 120px;">
            <div style="font-weight: 700;">PED-001</div>
            <div>Panini México</div>
            <div style="color: #555;">2024-05-10</div>
            <div style="text-align: center;"><span class="badge-estado naranja"></span></div>
            <div style="font-weight: 700;">$4,500.00</div>
            <div class="table-actions" style="justify-content: flex-end;">
                <button class="btn-action-icon"><i class="fa-solid fa-eye"></i></button>
            </div>
        </div>
    </div>

    <!-- MODAL POPUP: DETALLES DE PEDIDO (Página 10) -->
    <div class="modal-overlay">
        <div class="modal-box">
            <h2 class="modal-title">Detalles de pedido</h2>

            <table class="modal-table">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad solicitada</th>
                        <th>Precio.Unit</th>
                        <th>Sub.T</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($detalles as $item): ?>
                        <tr>
                            <td style="font-weight: 600;"><?php echo htmlspecialchars($item['producto']); ?></td>
                            <td style="text-align: center;"><?php echo $item['cantidad']; ?></td>
                            <td><?php echo $item['precio_unit']; ?></td>
                            <td style="font-weight: 700;"><?php echo $item['subtotal']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class="modal-actions">
                <a href="pedidos.php" class="btn-modal-cerrar">cerrar</a>
                <button class="btn-modal-ingresar" onclick="alert('Mercancía ingresada al inventario con éxito'); window.location.href='inventario.php';">
                    Ingresar a inv
                </button>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
