<?php

$pagina_actual = 'ventas';
$titulo_pagina = 'KomiX - Punto de Venta';
include 'includes/header.php';
include 'includes/sidebar.php';

$comics_catalogo = [
    [
        'id' => 1,
        'titulo' => 'Classic Comic Book Action',
        'precio' => '$150.00',
        'imagen' => 'images/comic_action.jpg'
    ],
    [
        'id' => 2,
        'titulo' => 'The Incredible Hulk vs Wolverine',
        'precio' => '$280.00',
        'imagen' => 'images/comic_hulk.jpg'
    ],
    [
        'id' => 3,
        'titulo' => 'X-Men: Mutant Genesis #1',
        'precio' => '$220.00',
        'imagen' => 'images/comic_xmen.jpg'
    ],
    [
        'id' => 4,
        'titulo' => 'Justice League: New 52 #1',
        'precio' => '$195.00',
        'imagen' => 'images/comic_justice.jpg'
    ]
];
?>

<div class="layout-con-panel-derecho">
    <!-- Columna Principal: Catálogo de Venta -->
    <main class="main-column">
        <div class="content-header-row" style="margin-bottom: 20px;">
            <h1 class="page-title">Catalogo</h1>
            <div class="busqueda-wrapper">
                <i class="fa-solid fa-magnifying-glass search-icon"></i>
                <input type="text" class="input-busqueda-pill" placeholder="Buscador">
            </div>
        </div>

        <div class="catalogo-grid" style="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
            <?php foreach ($comics_catalogo as $comic): ?>
                <div class="comic-card">
                    <img 
                        src="<?php echo htmlspecialchars($comic['imagen']); ?>" 
                        alt="<?php echo htmlspecialchars($comic['titulo']); ?>" 
                        class="comic-cover-img"
                        onerror="this.onerror=null; this.src='assets/images/comic_action.png';"
                    >
                    <div class="comic-card-info">
                        <span class="comic-card-title"><?php echo htmlspecialchars($comic['titulo']); ?></span>
                        <span class="comic-card-price"><?php echo htmlspecialchars($comic['precio']); ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div style="margin-top: 24px;">
            <a href="historial.php" class="btn-ticket-action" style="display: inline-block; padding: 10px 24px; text-decoration: none; width: auto; font-size: 0.9rem;">
                Ver historial de tickets
            </a>
        </div>
    </main>

    <!-- Panel Lateral Derecho: Ticket de Venta -->
    <aside class="ticket-panel">
        <h2 style="font-size: 1.45rem; font-weight: 800; text-align: center; color: #fff;">Ticket</h2>

        <!-- Encabezado del Ticket -->
        <div class="ticket-header-box">
            <div><strong>Folio:</strong> TK-10294</div>
            <div><strong>Fecha:</strong> <?php echo date('d/m/Y'); ?></div>
            <div><strong>Hora:</strong> <?php echo date('H:i'); ?></div>
            <div><strong>Atendio:</strong> Mendoza A.</div>
        </div>

        <!-- Líneas de Venta -->
        <div class="ticket-lineas">
            <div style="display: flex; justify-content: space-between; font-weight: 700; border-bottom: 1px solid rgba(255,255,255,0.2); padding-bottom: 4px;">
                <span>CANT:</span>
                <span>DESCRIPCION:</span>
                <span>IMPORTE:</span>
            </div>
            <div style="display: flex; justify-content: space-between;">
                <span>1</span>
                <span>The Incredible Hulk #1</span>
                <span>$280.00</span>
            </div>
            <div style="display: flex; justify-content: space-between;">
                <span>2</span>
                <span>Classic Comic Book</span>
                <span>$300.00</span>
            </div>
        </div>

        <!-- Total y Métodos de Pago -->
        <div class="ticket-pago-box">
            <div style="font-weight: 800; font-size: 0.95rem; margin-bottom: 6px;">Modal de cambio - Total: $580.00</div>
            <div style="font-size: 0.85rem; color: #444;">Efectivo recibido: $600.00 | Cambio: $20.00</div>
            <div class="payment-methods-row">
                <span class="payment-badge" style="color: #1a1f71;"><i class="fa-brands fa-cc-visa"></i> VISA</span>
                <span class="payment-badge" style="color: #eb001b;"><i class="fa-brands fa-cc-mastercard"></i> MC</span>
                <span class="payment-badge" style="color: #003087;"><i class="fa-brands fa-paypal"></i> PayPal</span>
                <span class="payment-badge" style="color: #000;"><i class="fa-brands fa-apple-pay"></i> Pay</span>
            </div>
        </div>

        <!-- Botones de Acción -->
        <div class="ticket-actions-row">
            <button class="btn-ticket-action" onclick="window.print()">Imprimir</button>
            <button class="btn-ticket-action" onclick="alert('Ticket descargado en formato PDF')">Descargar</button>
            <button class="btn-ticket-action" onclick="alert('Nuevo pedido iniciado')">Nuevo Pedido</button>
        </div>
    </aside>
</div>

<?php include 'includes/footer.php'; ?>
