import Estudiante from './components/Estudiante';
import './App.css';

export default function App() {
  
  const estudiantes = [
    {id:1, nombre:'Kevin', carrera:'TIID'},
    {id:2, nombre:'Karen', carrera:'Redes'},
    {id:3, nombre:'Agus', carrera:'Sistemas'},
  ];
  
  return (
    <main className="contenedor">
      <h1>Listado de estudiantes</h1>

      <form>
        <input type="text" placeholder="Escribe nombre"/>
        <input type="text" placeholder="Escribe carrera"/>
        <button type="button">Agregar</button>
      </form>

      <h2>Estudiantes registrados</h2>
      <ul>
        {estudiantes.map((estudiante) => (
          <Estudiante 
          key={estudiante.id} 
          estudiante={estudiante}/>
        ))}
      </ul>
      <p>Total de estudiantes: {estudiantes.length}</p>
    </main>
  );
}