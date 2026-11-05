<?php

$pagina_actual = 'usuario';
$titulo_pagina = 'KomiX - Gestión de Usuarios';
include 'includes/header.php';
include 'includes/sidebar.php';

$usuarios = [
    ['nombre' => 'Alberto Mendoza', 'correo' => 'mendoza@komix.com', 'rol' => 'Admin', 'activo' => true],
    ['nombre' => 'Rodrigo García', 'correo' => 'rgarcia@komix.com', 'rol' => 'Vendedor', 'activo' => true],
    ['nombre' => 'Lucía Pérez', 'correo' => 'lperez@komix.com', 'rol' => 'Vendedor', 'activo' => true],
    ['nombre' => 'Carlos Morales', 'correo' => 'cmorales@komix.com', 'rol' => 'Inventario', 'activo' => false],
    ['nombre' => 'Valeria Castillo', 'correo' => 'vcastillo@komix.com', 'rol' => 'Cajero', 'activo' => true],
];
?>

<div class="layout-con-panel-derecho">
    <!-- Columna Principal -->
    <main class="main-column">
        <h1 class="page-title" style="margin-bottom: 24px;">Gestion de usuarios</h1>

        <!-- Tabla de Usuarios -->
        <div class="komix-table-container">
            <div class="table-header-row" style="grid-template-columns: 1.5fr 2fr 1.5fr 1fr 100px;">
                <div>Nombre:</div>
                <div>Correo:</div>
                <div style="text-align: center;">Rol:</div>
                <div style="text-align: center;">Estado:</div>
                <div style="text-align: right;">Acciones:</div>
            </div>

            <?php foreach ($usuarios as $u): ?>
                <div class="table-data-row" style="grid-template-columns: 1.5fr 2fr 1.5fr 1fr 100px;">
                    <div style="font-weight: 700;"><?php echo htmlspecialchars($u['nombre']); ?></div>
                    <div style="color: #444;"><?php echo htmlspecialchars($u['correo']); ?></div>
                    <div style="text-align: center;">
                        <select class="dropdown-rol-morado">
                            <option value="Admin" <?php echo $u['rol'] === 'Admin' ? 'selected' : ''; ?>>Admin</option>
                            <option value="Vendedor" <?php echo $u['rol'] === 'Vendedor' ? 'selected' : ''; ?>>Vendedor</option>
                            <option value="Inventario" <?php echo $u['rol'] === 'Inventario' ? 'selected' : ''; ?>>Inventario</option>
                            <option value="Cajero" <?php echo $u['rol'] === 'Cajero' ? 'selected' : ''; ?>>Cajero</option>
                        </select>
                    </div>
                    <div style="text-align: center;">
                        <label class="switch-toggle">
                            <input type="checkbox" <?php echo $u['activo'] ? 'checked' : ''; ?>>
                            <span class="toggle-slider"></span>
                        </label>
                    </div>
                    <div class="table-actions" style="justify-content: flex-end;">
                        <button class="btn-action-icon" title="Editar"><i class="fa-solid fa-pen"></i></button>
                        <button class="btn-action-icon" title="Eliminar"><i class="fa-solid fa-trash-can"></i></button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <!-- Panel Lateral Derecho Rojo: Crear Nuevo Usuario -->
    <aside class="side-panel-rojo">
        <h2 class="side-panel-title">Crear nuevo usuario</h2>

        <form action="usuarios.php" method="POST" class="side-panel-form">
            <div class="form-group-panel">
                <label>Nombre:</label>
                <input type="text" name="nombre" class="form-input-white" required>
            </div>

            <div class="form-group-panel">
                <label>Asignar Rol:</label>
                <select name="rol" class="form-input-white" style="appearance: none; background-image: url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'%23111\' stroke-width=\'2\'%3e%3cpolyline points=\'6 9 12 15 18 9\'%3e%3c/polyline%3e%3c/svg%3e'); background-repeat: no-repeat; background-position: right 14px center; background-size: 14px;">
                    <option value="Admin">Administrador General</option>
                    <option value="Vendedor">Vendedor de Mostrador</option>
                    <option value="Inventario">Encargado de Almacén</option>
                    <option value="Cajero">Cajero POS</option>
                </select>
            </div>

            <div class="form-group-panel">
                <label>Correo:</label>
                <input type="email" name="correo" class="form-input-white" required>
            </div>

            <button type="submit" class="btn-guardar-panel">
                Generar
            </button>
        </form>
    </aside>
</div>

<?php include 'includes/footer.php'; ?>
