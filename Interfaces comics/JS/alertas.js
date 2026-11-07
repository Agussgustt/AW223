(function (global) {
  'use strict';

  // Inyectar contenedor de toasts si no existe
  function asegurarContenedorToasts() {
    let contenedor = document.getElementById('komix-toast-container');
    if (!contenedor) {
      contenedor = document.createElement('div');
      contenedor.id = 'komix-toast-container';
      contenedor.className = 'komix-toast-container';
      document.body.appendChild(contenedor);
    }
    return contenedor;
  }

  const KomixAlert = {
    toast: function (mensaje, tipo = 'info', duracion = 3500) {
      const contenedor = asegurarContenedorToasts();

      const toast = document.createElement('div');
      toast.className = `komix-toast komix-toast-${tipo}`;

      // Iconos en SVG según tipo
      let icono = '';
      if (tipo === 'success') {
        icono = `<svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="komix-toast-icon"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>`;
      } else if (tipo === 'error' || tipo === 'danger') {
        icono = `<svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="komix-toast-icon"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>`;
      } else if (tipo === 'warning') {
        icono = `<svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="komix-toast-icon"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>`;
      } else {
        icono = `<svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round" class="komix-toast-icon"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>`;
      }

      toast.innerHTML = `
        <div class="komix-toast-content">
          ${icono}
          <span class="komix-toast-text">${mensaje}</span>
        </div>
        <button class="komix-toast-close" aria-label="Cerrar">&times;</button>
        <div class="komix-toast-progress" style="animation-duration: ${duracion}ms;"></div>
      `;

      // Botón de cierre manual
      const btnCerrar = toast.querySelector('.komix-toast-close');
      const cerrarToast = () => {
        toast.classList.add('komix-toast-fadeout');
        setTimeout(() => {
          if (toast.parentElement) {
            toast.parentElement.removeChild(toast);
          }
        }, 300);
      };

      btnCerrar.addEventListener('click', cerrarToast);

      contenedor.appendChild(toast);

      // Auto-eliminar después del tiempo especificado
      setTimeout(cerrarToast, duracion);
    },

    confirm: function (opciones) {
      const config = Object.assign(
        {
          titulo: '¿Estás seguro?',
          mensaje: 'Esta acción no se puede deshacer.',
          tipo: 'danger',
          confirmText: 'Sí, confirmar',
          cancelText: 'Cancelar',
          onConfirm: null,
          onCancel: null,
        },
        opciones
      );

      const overlay = document.createElement('div');
      overlay.className = 'komix-modal-alert-overlay';

      let headerIcon = '';
      if (config.tipo === 'danger') {
        headerIcon = `
          <div class="komix-alert-icon-box danger">
            <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="3 6 5 6 21 6"></polyline>
              <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
              <line x1="10" y1="11" x2="10" y2="17"></line>
              <line x1="14" y1="11" x2="14" y2="17"></line>
            </svg>
          </div>
        `;
      } else {
        headerIcon = `
          <div class="komix-alert-icon-box warning">
            <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path>
              <line x1="12" y1="9" x2="12" y2="13"></line>
              <line x1="12" y1="17" x2="12.01" y2="17"></line>
            </svg>
          </div>
        `;
      }

      overlay.innerHTML = `
        <div class="komix-modal-alert-card">
          <div class="komix-alert-header">
            ${headerIcon}
            <h3 class="komix-alert-title">${config.titulo}</h3>
          </div>
          <div class="komix-alert-body">
            <p>${config.mensaje}</p>
          </div>
          <div class="komix-alert-footer">
            <button class="komix-btn-alert cancel" id="komix-btn-cancel">${config.cancelText}</button>
            <button class="komix-btn-alert confirm ${config.tipo}" id="komix-btn-confirm">${config.confirmText}</button>
          </div>
        </div>
      `;

      document.body.appendChild(overlay);

      const cerrarModal = () => {
        overlay.classList.add('fade-out');
        setTimeout(() => {
          if (overlay.parentElement) {
            overlay.parentElement.removeChild(overlay);
          }
        }, 200);
      };

      overlay.querySelector('#komix-btn-cancel').addEventListener('click', () => {
        cerrarModal();
        if (typeof config.onCancel === 'function') config.onCancel();
      });

      overlay.querySelector('#komix-btn-confirm').addEventListener('click', () => {
        cerrarModal();
        if (typeof config.onConfirm === 'function') config.onConfirm();
      });

      // Cerrar con Escape
      const handleKeyDown = (e) => {
        if (e.key === 'Escape') {
          cerrarModal();
          if (typeof config.onCancel === 'function') config.onCancel();
          document.removeEventListener('keydown', handleKeyDown);
        }
      };
      document.addEventListener('keydown', handleKeyDown);
    },

    // Atajos rápidos
    success: function (msg, duracion) {
      this.toast(msg, 'success', duracion);
    },
    error: function (msg, duracion) {
      this.toast(msg, 'error', duracion);
    },
    warning: function (msg, duracion) {
      this.toast(msg, 'warning', duracion);
    },
    info: function (msg, duracion) {
      this.toast(msg, 'info', duracion);
    },
  };

  // Exponer globalmente
  global.KomixAlert = KomixAlert;

  // Interceptar o proveer window.alerta / window.showKomixAlert
  global.showKomixAlert = function (msg, tipo = 'info') {
    KomixAlert.toast(msg, tipo);
  };
})(typeof window !== 'undefined' ? window : this);