import {useState} from 'react';
import Encabezado from './components/Encabezado';
import NavBar from './components/navBar';
import Tarjetas from './components/Tarjetas';
import './App.css'

import cancun from './assets/cancun.jpg';
import paris from './assets/paris.jpg';
import bergen from './assets/bergen.jpg';


export default function App() {
  
  const destinos = [
    {id:1, nombre:'Cancun', pais:'Mexico', tipo:'Playa', precio:'$5,500', imagen:cancun, descripcion: 'Disfruta de playas de arena blanca y aguas turquesa en el Caribe mexicano.', duracion: '6 dias / 5 noches', incluye: 'Vuelo redondo, hotel todo incluido y traslados' },
    {id:1, nombre:'Paris', pais:'Francia', tipo:'Cultural', precio:'$18,000', imagen:paris, descripcion: 'Recorre la ciudad del amor, museos históricos y gastronomía de clase mundial.', duracion: '6 días / 5 noches', incluye: 'Vuelo redondo, hospedaje céntrico y desayunos' },
    {id:1, nombre:'Bergen', pais:'Noruega', tipo:'Cultural', precio:'$20,000', imagen:bergen, descripcion: 'Explora los impresionantes fiordos noruegos y sus casas de madera coloridas.', duracion: '5 días / 4 noches', incluye: 'Hospedaje, tour por los fiordos y transporte local'  },
  ];

  const [favoritos, setFavoritos] = useState([]);
  const [vistaFavoritos, setVistaFavoritos] = useState(false);

  const handleToggleFavorito = (id) => {
    if (favoritos.includes(id)) {
      setFavoritos(favoritos.filter((favId) => favId !== id));
    } else {
      setFavoritos([...favoritos, id]);
    }
  };

  const destinosAMostrar = vistaFavoritos
    ? destinos.filter((destino) => favoritos.includes(destino.id))
    : destinos;

  return (
    <div className="app-container">

      <NavBar
        onVerTodos={() => setVistaFavoritos(false)}
        onVerFavoritos={() => setVistaFavoritos(true)}
      />

      <Encabezado TotalFavoritos={favoritos.length} />

      <main id="destinos" className="destinos-grid">
        {destinosAMostrar.length > 0 ? (
          destinosAMostrar.map((destino) => (
            <Tarjetas
              key={destino.id}
              destino={destino}
              esFavorito={favoritos.includes(destino.id)}
              onToggleFavorito={handleToggleFavorito}
            />
          ))
        ) : (
          <p className="mensaje-vacio">Aún no tienes destinos agregados a favoritos.</p>
        )}
      </main>
    </div>
  );
}


