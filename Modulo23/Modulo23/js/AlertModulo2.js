const parametros= new URLSearchParams(window.location.search);
const estado=parametros.get("estado");

if (estado==="exito")
{
    alert("Exito: Tu mensaje fue guardado");

}else if(estado==="error")
{
    alert("Error: No se actualizó tu mensaje intentalo nuevamente");
}
if (estado === "exito" || estado === "errorActualizar") {
    window.history.replaceState({}, document.title, window.location.pathname);
}