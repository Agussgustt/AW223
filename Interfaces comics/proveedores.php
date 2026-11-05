<?php
/**
 * KomiX - Módulo de Proveedores
 * Archivo: proveedores.php (Página 8 del diseño)
 */
$pagina_actual = 'proveedores';
$titulo_pagina = 'KomiX - Proveedores';
include 'includes/header.php';
include 'includes/sidebar.php';

$proveedores = [
    [
        'nombre' => 'Distribuidora Panini México',
        'contacto' => 'Carlos Ramírez',
        'telefono' => '+52 55 1234 5678',
        'correo' => 'ventas@panini.com.mx'
    ],
    [
        'nombre' => 'Editorial Kamite Cómics',
        'contacto' => 'Sofía Morales',
        'telefono' => '+52 55 8765 4321',
        'correo' => 'contacto@kamite.com.mx'
    ],
    [
        'nombre' => 'Diamond Comic Distributors',
        'contacto' => 'John Gallagher',
        'telefono' => '+1 443 318 8000',
        'correo' => 'orders@diamondcomics.com'
    ],
    [
        'nombre' => 'Coleccionables Anime & Comics S.A.',
        'contacto' => 'Mariana Torres',
        'telefono' => '+52 33 9988 7766',
        'correo' => 'mtorres@coleccionables.mx'
    ]
];
?>

<div class="layout-con-panel-derecho">
    <!-- Columna Principal -->
    <main class="main-column">
        <h1 class="page-title" style="margin-bottom: 24px;">Proveedores</h1>

        <div class="proveedores-grid">
            <?php foreach ($proveedores as $prov): ?>
                <div class="proveedor-card">
                    <div class="proveedor-nombre"><?php echo htmlspecialchars($prov['nombre']); ?></div>
                    <div class="proveedor-detalle"><strong>Contacto:</strong> <?php echo htmlspecialchars($prov['contacto']); ?></div>
                    <div class="proveedor-detalle"><strong>Teléfono:</strong> <?php echo htmlspecialchars($prov['telefono']); ?></div>
                    <div class="proveedor-detalle"><strong>Correo:</strong> <?php echo htmlspecialchars($prov['correo']); ?></div>

                    <div class="proveedor-actions">
                        <button class="btn-action-icon" title="Editar"><i class="fa-solid fa-pen"></i></button>
                        <button class="btn-action-icon" title="Eliminar"><i class="fa-solid fa-trash-can"></i></button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <!-- Panel Lateral Derecho Rojo: Nuevo Proveedor -->
    <aside class="side-panel-rojo">
        <h2 class="side-panel-title">+ Nuevo Proveedor</h2>

        <form action="proveedores.php" method="POST" class="side-panel-form">
            <div class="form-group-panel">
                <label>Nombre:</label>
                <input type="text" name="nombre" class="form-input-white" required>
            </div>

            <div class="form-group-panel">
                <label>Contacto:</label>
                <input type="text" name="contacto" class="form-input-white" required>
            </div>

            <div class="form-group-panel">
                <label>Telefono:</label>
                <input type="tel" name="telefono" class="form-input-white" required>
            </div>

            <div class="form-group-panel">
                <label>Correo:</label>
                <input type="email" name="correo" class="form-input-white" required>
            </div>

            <button type="submit" class="btn-guardar-panel">
                Guardar
            </button>
        </form>
    </aside>
</div>

<?php include 'includes/footer.php'; ?>
