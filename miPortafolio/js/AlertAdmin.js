(function() {
const parametros= new URLSearchParams(window.location.search);
const estado= parametros.get("estadophp")

if(estado === "actualizacion_exito"){
    alert("Exito, tu mensaje fue actualizado!");
}else if(estado === "borrar_exito"){
    alert("Exito, tu mensaje fue eliminado!");
}else if(estado === "actualizacion_error" || estado === "borrar_error" || estado === "error"){
    alert("Algo Fallo, intentalo de nuevo!");
}

if(estado != null){
    window.history.replaceState({}, document.title, window.location.pathname);
}
})();