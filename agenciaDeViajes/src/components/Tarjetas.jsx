import { useState } from "react";

export default function Tarjetas({ destino, esFavorito, onToggleFavorito }) {
  const [mostrarDetalles, setMostrarDetalles] = useState(false);

  return (
    <article className="destino-card">
      <img src={destino.imagen} alt={destino.nombre} className="cancun-img" />
      <div className="destino-body">
        <span className="categoria-badge">{destino.categoria}</span>
        <h3 className="destino-titulo">{destino.nombre}</h3>
        <p className="destino-pais">{destino.pais}</p>
        <p className="destino-precio">
          Desde {destino.precio.toLocaleString("es-MX")} MXN
        </p>

        {mostrarDetalles && (
          <div className="destino-detalles">
            <p>{destino.descripcion}</p>
            <p><strong>Duración:</strong> {destino.duracion}</p>
            <p><strong>Incluye:</strong> {destino.incluye}</p>
          </div>
        )}

        <div className="destino-acciones">
          <button
            type="button"
            className={`btn-favorito ${esFavorito ? "activo" : ""}`}
            onClick={() => onToggleFavorito(destino.id)}
          >
            {esFavorito ? "En favoritos" : "Agregar favorito"}
          </button>

          <button
            type="button"
            className="btn-detalles"
            onClick={() => setMostrarDetalles(!mostrarDetalles)}
          >
            {mostrarDetalles ? "Ocultar detalles" : "Ver detalles"}
          </button>
        </div>
      </div>
    </article>
  );
}