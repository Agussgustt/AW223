<?php
/**
 * KomiX - Módulo de Comics
 * Archivo: comics.php (Página 5 del diseño)
 */
$pagina_actual = 'comics';
$titulo_pagina = 'KomiX - Comics';
include 'includes/header.php';
include 'includes/sidebar.php';

// Cómics de ejemplo
$comics = [
    ['titulo' => 'Marvel', 'editorial' => 'Marvel Comics', 'volumen' => 'Vol. 1 #01', 'precio_compra' => '$120.00', 'precio_venta' => '$250.00'],
    ['titulo' => 'The Amazing Spider-Man', 'editorial' => 'Marvel Comics', 'volumen' => 'Vol. 1 #300', 'precio_compra' => '$350.00', 'precio_venta' => '$650.00'],
    ['titulo' => 'Batman: The Dark Knight Returns', 'editorial' => 'DC Comics', 'volumen' => 'Tomo Único', 'precio_compra' => '$280.00', 'precio_venta' => '$490.00'],
    ['titulo' => 'Superman: Action Comics', 'editorial' => 'DC Comics', 'volumen' => 'Vol. 2 #1000', 'precio_compra' => '$150.00', 'precio_venta' => '$320.00'],
    ['titulo' => 'X-Men: Days of Future Past', 'editorial' => 'Marvel Comics', 'volumen' => 'Vol. 1 #141', 'precio_compra' => '$400.00', 'precio_venta' => '$800.00'],
    ['titulo' => 'Watchmen', 'editorial' => 'DC Comics', 'volumen' => 'Edición Deluxe', 'precio_compra' => '$450.00', 'precio_venta' => '$850.00'],
    ['titulo' => 'Spawn', 'editorial' => 'Image Comics', 'volumen' => 'Vol. 1 #01', 'precio_compra' => '$200.00', 'precio_venta' => '$390.00']
];
?>

<main class="main-content">
    <div class="content-header-row">
        <h1 class="page-title">Comics</h1>
        <button class="btn-nuevo-rojo" onclick="alert('Formulario para registrar un nuevo cómic')">
            + Nuevo comic
        </button>
    </div>

    <!-- Barra de Filtros y Búsqueda -->
    <div class="filter-bar-row">
        <div class="busqueda-wrapper">
            <i class="fa-solid fa-magnifying-glass search-icon"></i>
            <input type="text" class="input-busqueda-pill" placeholder="Busqueda (por titulo/ISBN)">
        </div>

        <span class="filter-label">Filtros:</span>

        <button class="btn-filtro active">DC comics</button>
        <button class="btn-filtro">Editorial</button>
        <button class="btn-filtro">Año</button>
    </div>

    <!-- Tabla de Cómics -->
    <div class="komix-table-container">
        <div class="table-header-row" style="grid-template-columns: 2fr 1.5fr 1.2fr 1.2fr 1.2fr 100px;">
            <div>Titulo:</div>
            <div>Editorial:</div>
            <div>Volumen:</div>
            <div>Precio compra:</div>
            <div>Precio venta:</div>
            <div style="text-align: right;">Acciones:</div>
        </div>

        <?php foreach ($comics as $c): ?>
            <div class="table-data-row" style="grid-template-columns: 2fr 1.5fr 1.2fr 1.2fr 1.2fr 100px;">
                <div style="font-weight: 700;"><?php echo htmlspecialchars($c['titulo']); ?></div>
                <div style="color: #444;"><?php echo htmlspecialchars($c['editorial']); ?></div>
                <div style="color: #444;"><?php echo htmlspecialchars($c['volumen']); ?></div>
                <div><?php echo htmlspecialchars($c['precio_compra']); ?></div>
                <div><?php echo htmlspecialchars($c['precio_venta']); ?></div>
                <div class="table-actions" style="justify-content: flex-end;">
                    <button class="btn-action-icon" title="Eliminar"><i class="fa-solid fa-trash-can"></i></button>
                    <button class="btn-action-icon" title="Editar"><i class="fa-solid fa-pen"></i></button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
