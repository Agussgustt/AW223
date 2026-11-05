<?php
/**
 * KomiX - Módulo de Pedidos
 * Archivo: pedidos.php (Página 9 del diseño)
 */
$pagina_actual = 'pedidos';
$titulo_pagina = 'KomiX - Pedidos';
include 'includes/header.php';
include 'includes/sidebar.php';

$pedidos = [
    ['id' => 'PED-001', 'proveedor' => 'Panini México', 'fecha' => '2024-05-10', 'estado' => 'naranja', 'costo' => '$4,500.00'],
    ['id' => 'PED-002', 'proveedor' => 'Kamite Cómics', 'fecha' => '2024-05-12', 'estado' => 'verde', 'costo' => '$2,350.00'],
    ['id' => 'PED-003', 'proveedor' => 'Diamond Distributors', 'fecha' => '2024-05-14', 'estado' => 'rojo', 'costo' => '$8,900.00'],
    ['id' => 'PED-004', 'proveedor' => 'Anime & Cómics S.A.', 'fecha' => '2024-05-15', 'estado' => 'verde', 'costo' => '$1,200.00'],
    ['id' => 'PED-005', 'proveedor' => 'Panini México', 'fecha' => '2024-05-18', 'estado' => 'naranja', 'costo' => '$6,100.00'],
    ['id' => 'PED-006', 'proveedor' => 'Kamite Cómics', 'fecha' => '2024-05-20', 'estado' => 'rojo', 'costo' => '$3,400.00'],
    ['id' => 'PED-007', 'proveedor' => 'Diamond Distributors', 'fecha' => '2024-05-22', 'estado' => 'naranja', 'costo' => '$5,800.00']
];
?>

<main class="main-content">
    <div class="content-header-row">
        <h1 class="page-title">Pedidos</h1>
        <a href="pedidos_nuevo.php" class="btn-nuevo-rojo">
            + Crear pedido
        </a>
    </div>

    <!-- Barra de Búsqueda -->
    <div class="filter-bar-row">
        <div class="busqueda-wrapper">
            <i class="fa-solid fa-magnifying-glass search-icon"></i>
            <input type="text" class="input-busqueda-pill" placeholder="Busqueda (por ID)">
        </div>
    </div>

    <!-- Tabla de Pedidos -->
    <div class="komix-table-container">
        <div class="table-header-row" style="grid-template-columns: 1.2fr 2fr 1.5fr 100px 1.5fr 120px;">
            <div>ID pedido:</div>
            <div>Proveedor:</div>
            <div>Fecha emision:</div>
            <div style="text-align: center;">Estado:</div>
            <div>Costo total:</div>
            <div style="text-align: right;">Acciones:</div>
        </div>

        <?php foreach ($pedidos as $p): ?>
            <div class="table-data-row" style="grid-template-columns: 1.2fr 2fr 1.5fr 100px 1.5fr 120px;">
                <div style="font-weight: 700;"><?php echo htmlspecialchars($p['id']); ?></div>
                <div><?php echo htmlspecialchars($p['proveedor']); ?></div>
                <div style="color: #555;"><?php echo htmlspecialchars($p['fecha']); ?></div>
                <div style="text-align: center;">
                    <span class="badge-estado <?php echo $p['estado']; ?>"></span>
                </div>
                <div style="font-weight: 700;"><?php echo htmlspecialchars($p['costo']); ?></div>
                <div class="table-actions" style="justify-content: flex-end;">
                    <a href="pedidos_detalle.php" class="btn-action-icon" title="Ver detalles"><i class="fa-solid fa-eye"></i></a>
                    <button class="btn-action-icon" title="Eliminar"><i class="fa-solid fa-trash-can"></i></button>
                    <button class="btn-action-icon" title="Editar"><i class="fa-solid fa-pen"></i></button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
