from flask import Blueprint

controladorAlumnoBP = Blueprint('controladorAlumno', __name__)

#ruta arranque del servidor
@controladorAlumnoBP.route('/')
def inicio():
    return " hola soy el backen de Alumno "

#ruta para insert
@controladorAlumnoBP.route('/guardarAlumno', methods=['POST'])
def guardar():
    return 'se guardo el alumno'

#ruta para consultar todo
@controladorAlumnoBP.route('/consultartodo', methods=['GET'])
def consultartodo():
    return 'se consulto todo'

#ruta para actualizar
@controladorAlumnoBP.route('/actualizarAlumno', methods=['PUT'])
def actualizar():
    return 'se actualizo el alumno'

#ruta para eliminar
@controladorAlumnoBP.route('/eliminarAlumno', methods=['DELETE'])
def eliminar():
    return 'se elimino el alumno'