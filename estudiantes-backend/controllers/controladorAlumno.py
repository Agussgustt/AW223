from flask import Blueprint, request, jsonify
from Models.modelEstudiante import *

controladorAlumnoBP = Blueprint('controladorAlumno', __name__)

#ruta arranque del servidor
@controladorAlumnoBP.route('/')
def inicio():
    return " hola soy el backen de Alumno "

#ruta para insert
@controladorAlumnoBP.route('/guardarAlumno', methods=['POST'])
def guardar():
    nombreReq= request.form.get('txtnombre','').strip()
    carreraReq= request.form.get('txtcarrera','').strip()

    try:
        insertEstudiante(nombreReq, carreraReq)
        return jsonify({"completado": "estudiante guardao"}),200
    except Exception as e:
        return jsonify({"error": str(e)}),500

#ruta para consultar alumnos
@controladorAlumnoBP.route('/consultartodo', methods=['GET'])
def consultartodo():
    try:
        alumnos = selectAll()
        return jsonify(alumnos), 200;

    except Exception as e:
        print(f"Error:{e}")
        return jsonify({"Error": str(e)}),500

#ruta para actualizar alumno
@controladorAlumnoBP.route('/actualizarAlumno', methods=['PUT'])
def actualizar():
    idReq = request.form.get('txtid', '').strip()
    nombreReq = request.form.get('txtnombre', '').strip()
    carreraReq = request.form.get('txtcarrera', '').strip()
    try:
        if not idReq or not nombreReq or not carreraReq:
            return jsonify({"error": "Faltan datos obligatorios"}), 400

        filas = actualizarEstudiante(idReq, nombreReq, carreraReq)
        if filas == 0:
            return jsonify({"error": "estudiante no encontrado"}), 404

        return jsonify({"completado": "estudiante actualizado"}), 200
    except Exception as e:
        mysql.connection.rollback()
        return jsonify({"error": str(e)}), 500
        
    

#ruta para eliminar alumno
@controladorAlumnoBP.route('/eliminarAlumno', methods=['PUT'])
def eliminar():
    id = request.form.get('id','').strip()

    try:
        softDeleteEstudiante(id)
        return jsonify({"Completado":"Alumno Borrado"}),200
    except Exception as e:
        return jsonify({"Error": str(e)}),500

#ruta para consultar por id
@controladorAlumnoBP.route('/consultaid', methods=['GET'])
def consultaid():
    try:
        alumno_id = request.args.get('id', type=int)

        alumno = consultaporid(alumno_id)
        return jsonify(alumno),200

    except Exception as e:
        print(f"ERROR:{e}")
        return jsonify({"ERROR": str(e)}),500
