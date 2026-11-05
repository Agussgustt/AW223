<?php
/**
 * KomiX - Área Principal / Plantilla Base
 * Archivo: index.php (Página 4 del diseño)
 */
$pagina_actual = 'dashboard_base';
$titulo_pagina = 'KomiX - Área Principal';
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<!-- Área de Contenido Principal -->
<main class="main-content" style="display: flex; align-items: center; justify-content: center; min-height: calc(100vh - var(--alto-header));">
    <div style="text-align: center; color: #555555; font-size: 1.35rem; font-weight: 500;">
        Area de contenido principal
    </div>
</main>

<?php include 'includes/footer.php'; ?>
