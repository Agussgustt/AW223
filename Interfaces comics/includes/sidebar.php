<?php
/**
 * KomiX - Menú Lateral Izquierdo Reutilizable
 * Archivo: includes/sidebar.php
 */
if (!isset($pagina_actual)) {
    $pagina_actual = '';
}
?>
<!-- Sidebar Lateral Izquierda Negra -->
<aside class="app-sidebar">
    <ul class="sidebar-menu">
        <li class="sidebar-item <?php echo ($pagina_actual === 'comics') ? 'active' : ''; ?>">
            <a href="comics.php">
                <i class="fa-solid fa-mask nav-icon"></i>
                <span>Comics</span>
            </a>
        </li>
        <li class="sidebar-item <?php echo ($pagina_actual === 'articulos') ? 'active' : ''; ?>">
            <a href="articulos.php">
                <i class="fa-regular fa-newspaper nav-icon"></i>
                <span>Articulos</span>
            </a>
        </li>
        <li class="sidebar-item <?php echo ($pagina_actual === 'inventario') ? 'active' : ''; ?>">
            <a href="inventario.php">
                <i class="fa-solid fa-boxes-stacked nav-icon"></i>
                <span>Inventario</span>
            </a>
        </li>
        <li class="sidebar-item <?php echo ($pagina_actual === 'proveedores') ? 'active' : ''; ?>">
            <a href="proveedores.php">
                <i class="fa-solid fa-truck-field nav-icon"></i>
                <span>Proveedores</span>
            </a>
        </li>
        <li class="sidebar-item <?php echo ($pagina_actual === 'pedidos') ? 'active' : ''; ?>">
            <a href="pedidos.php">
                <i class="fa-solid fa-cart-shopping nav-icon"></i>
                <span>Pedidos</span>
            </a>
        </li>
        <li class="sidebar-item <?php echo ($pagina_actual === 'ventas') ? 'active' : ''; ?>">
            <a href="ventas.php">
                <i class="fa-solid fa-cash-register nav-icon"></i>
                <span>Ventas</span>
            </a>
        </li>
        <li class="sidebar-item <?php echo ($pagina_actual === 'reportes') ? 'active' : ''; ?>">
            <a href="reportes.php">
                <i class="fa-solid fa-chart-column nav-icon"></i>
                <span>Reportes</span>
            </a>
        </li>
        <li class="sidebar-item <?php echo ($pagina_actual === 'usuario') ? 'active' : ''; ?>">
            <a href="usuarios.php">
                <i class="fa-solid fa-user-gear nav-icon"></i>
                <span>Usuario</span>
            </a>
        </li>
    </ul>

    <div class="sidebar-footer">
        <a href="login.php" class="sidebar-logout-btn" title="Salir del sistema">
            <i class="fa-solid fa-arrow-right-from-bracket" style="font-size: 1.25rem;"></i>
        </a>
    </div>
</aside>
