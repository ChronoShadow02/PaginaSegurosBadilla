var tiempo;

function tiempoPagina() {
    tiempo = setTimeout(mostrarPagina, 2000);
}

function mostrarPagina() {
    document.getElementById("divCarga").style.display = "none";
    document.getElementById("contenedor-principal").style.display = "block";
}