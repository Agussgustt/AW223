<?php
/**
 * KomiX - Encabezado Superior Reutilizable
 * Archivo: includes/header.php
 */
if (!isset($pagina_actual)) {
    $pagina_actual = '';
}
if (!isset($titulo_pagina)) {
    $titulo_pagina = 'KomiX - Sistema de Gestión';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($titulo_pagina); ?></title>
    <!-- Hoja de estilos en carpeta separada css/estilos.css -->
    <link rel="stylesheet" href="css/estilos.css">
    <!-- FontAwesome o Lucide para íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="app-container">
        <!-- Header Superior Negro -->
        <header class="app-header">
            <div class="header-left">
                <a href="index.php">
                    <img src="public/assets/images/komix_logo.png" alt="KomiX" class="header-logo" onerror="this.onerror=null; this.src='assets/images/komix_logo.png';">
                </a>
                <div class="header-search">
                    <i class="fa-solid fa-magnifying-glass search-icon"></i>
                    <input type="text" placeholder="Busqueda global" name="q_global">
                </div>
            </div>

            <div class="header-right">
                <button class="header-icon-btn" title="Notificaciones" aria-label="Notificaciones">
                    <i class="fa-solid fa-bell"></i>
                </button>
                <button class="header-icon-btn" title="Perfil de usuario" aria-label="Perfil">
                    <i class="fa-solid fa-circle-user" style="font-size: 1.25rem;"></i>
                </button>
                <a href="login.php" class="btn-cerrar-sesion">Cerrar sesion</a>
            </div>
        </header>

        <div class="app-body">
