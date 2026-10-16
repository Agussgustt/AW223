const parametros= new URLSearchParams(window.location.search);
const estado= parametros.get("estadophp")

if(estado === "exito"){
    alert("Exito, tu mensaje fue Guardado!");
    
}else if(estado === "error"){
    alert("Algo Fallo, intentalo de nuevo!");
}

if(estado != null){
    window.history.replaceState({}, document.title, window.location.pathname);
}