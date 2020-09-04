var tiempo;

function tiempoPagina() {
    tiempo = setTimeout(mostrarPagina, 0);
}

function mostrarPagina() {
    document.getElementById("divCarga").style.display = "none";
    document.getElementById("contenedor-principal").style.display = "block";
}