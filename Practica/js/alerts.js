const Parametros = new URLSearchParams(window.location.search);
const Estado = Parametros.get("estadophp");

if (Estado === "exito") {
    alert("Exito, tus datos fueron guardados correctamente!");
} else if (Estado === "error"){
    alert("Algo fallo, intentalo de nuevo!");
}

if (Estado != null){
    window.history.replaceState({}, document.title, window.location.pathname);
}