export default function navBar({ onVerTodos, onVerFavoritos }){
    return(
        <nav className="navBar">
            <div className="navBar-container">
                <a href="#inicio" className="navBar-logo" onClick={onVerTodos}>
                    Viajando
                </a>
                <ul className="navBar-links">
                    <li>
                        <a href="#inicio" onClick={onVerTodos}> Inicio </a>  
                        <a href="#destinos" onClick={onVerTodos}> Destinos </a>
                        <a href="#favoritos" onClick={onVerFavoritos}> Favoritos </a>
                    </li>
                </ul>
            </div>
        </nav>
    );
}