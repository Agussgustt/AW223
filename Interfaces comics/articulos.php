<?php
/**
 * KomiX - Módulo de Artículos
 * Archivo: articulos.php (Página 6 del diseño)
 */
$pagina_actual = 'articulos';
$titulo_pagina = 'KomiX - Artículos';
include 'includes/header.php';
include 'includes/sidebar.php';

$articulos = [
    ['titulo' => 'Marvel', 'volumen' => 'Vol. 1', 'precio_compra' => '$95.00', 'precio_venta' => '$190.00'],
    ['titulo' => 'Figura Batman McFarlane', 'volumen' => 'Serie 7"', 'precio_compra' => '$320.00', 'precio_venta' => '$650.00'],
    ['titulo' => 'Funko Pop Spider-Man 2099', 'volumen' => 'Edición Especial', 'precio_compra' => '$180.00', 'precio_venta' => '$380.00'],
    ['titulo' => 'Póster Holográfico X-Men', 'volumen' => '60x90 cm', 'precio_compra' => '$75.00', 'precio_venta' => '$160.00'],
    ['titulo' => 'Taza Cerámica Capitán América', 'volumen' => '11 oz', 'precio_compra' => '$45.00', 'precio_venta' => '$120.00'],
];
?>

<div class="layout-con-panel-derecho">
    <!-- Columna Principal -->
    <main class="main-column">
        <h1 class="page-title" style="margin-bottom: 24px;">Articulos</h1>

        <div class="filter-bar-row">
            <div class="busqueda-wrapper">
                <i class="fa-solid fa-magnifying-glass search-icon"></i>
                <input type="text" class="input-busqueda-pill" placeholder="Busqueda (por titulo/ISBN)">
            </div>
        </div>

        <!-- Tabla de Artículos -->
        <div class="komix-table-container">
            <div class="table-header-row" style="grid-template-columns: 2fr 1.5fr 1.5fr 1.5fr;">
                <div>Titulo:</div>
                <div>Volumen:</div>
                <div>Precio compra:</div>
                <div>Precio compra:</div>
            </div>

            <?php foreach ($articulos as $art): ?>
                <div class="table-data-row" style="grid-template-columns: 2fr 1.5fr 1.5fr 1.5fr;">
                    <div style="font-weight: 700;"><?php echo htmlspecialchars($art['titulo']); ?></div>
                    <div style="color: #444;"><?php echo htmlspecialchars($art['volumen']); ?></div>
                    <div><?php echo htmlspecialchars($art['precio_compra']); ?></div>
                    <div><?php echo htmlspecialchars($art['precio_venta']); ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <!-- Panel Lateral Derecho Rojo Carmesí: Nuevo Artículo -->
    <aside class="side-panel-rojo">
        <h2 class="side-panel-title">Nuevo Articulo</h2>

        <form action="articulos.php" method="POST" class="side-panel-form">
            <div class="form-group-panel">
                <label>Nombre:</label>
                <input type="text" name="nombre" class="form-input-white" required>
            </div>

            <div class="form-group-panel">
                <label>Categoria:</label>
                <select name="categoria" class="form-input-white" style="appearance: none; background-image: url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'%23111\' stroke-width=\'2\'%3e%3cpolyline points=\'6 9 12 15 18 9\'%3e%3c/polyline%3e%3c/svg%3e'); background-repeat: no-repeat; background-position: right 14px center; background-size: 14px;">
                    <option value="comic">Cómics y Novelas Gráficas</option>
                    <option value="figuras">Figuras de Acción y Coleccionables</option>
                    <option value="merch">Merchandising y Ropa</option>
                    <option value="posters">Pósters y Decoración</option>
                </select>
            </div>

            <div class="form-group-panel">
                <label>Precio de compra:</label>
                <input type="number" step="0.01" name="precio_compra" class="form-input-white" required>
            </div>

            <div class="form-group-panel">
                <label>Precio de venta:</label>
                <input type="number" step="0.01" name="precio_venta" class="form-input-white" required>
            </div>

            <div class="form-group-panel">
                <label>Stock inicial:</label>
                <input type="number" name="stock_inicial" class="form-input-white" required>
            </div>

            <button type="submit" class="btn-guardar-panel">
                Guardar
            </button>
        </form>
    </aside>
</div>

<?php include 'includes/footer.php'; ?>
