export default function Encabezado({TotalFavoritos}){
    return(
        <header className="header">
            <div className="header-content">
                <h1>Descubre Tu Proximo Destino</h1>
                <p> Explora lugares increibles y planea tus proximas vacaciones </p>
                <div className="content-favoritos">
                <span>Destinos Favoritos</span>
                <p>Tu proxima aventura comienza aqui</p>
                <strong>{TotalFavoritos}</strong>
                </div>
            </div>
        </header>
    );
}