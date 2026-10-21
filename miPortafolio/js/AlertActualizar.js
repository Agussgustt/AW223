(function() {
const parametros= new URLSearchParams(window.location.search);
const estado= parametros.get("estadophp")

if(estado === "vacio"){
    alert("por favor, completa todos los campos!");
}else if(estado === "actualizacion_error" || estado === "borrar_error" || estado === "error"){
    alert("Algo Fallo, intentalo de nuevo!");
}

if(estado != null){
    window.history.replaceState({}, document.title, window.location.pathname);
}
})();